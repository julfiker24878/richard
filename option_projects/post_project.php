<?php 
session_start();
require '../db.php';
require '../session.php';

$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$clients = mysqli_real_escape_string($db_connect, $_POST['clients']);
$completion = mysqli_real_escape_string($db_connect, $_POST['completion']);
$type = mysqli_real_escape_string($db_connect, $_POST['type']);
$authors = mysqli_real_escape_string($db_connect, $_POST['authors']);
$budget = mysqli_real_escape_string($db_connect, $_POST['budget']);
$project_image = $_FILES['project_image'];

$after_explode = explode('.', $project_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($project_image['size'] < 5000000){
		$insert = "INSERT INTO projects(title, clients, completion, type, authors, budget) VALUES('$title','$clients','$completion','$type','$authors','$budget')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$project_image_name = "project".$id.".".$extension;
		$new_location = 'uploaded/'.$project_image_name;
		move_uploaded_file($project_image['tmp_name'], $new_location);

		$update_image = "UPDATE projects SET project_image='$project_image_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Project informaitons have been added successfully!";
		header('location: add_project.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_project.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_project.php');
}