<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];

$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$clients = mysqli_real_escape_string($db_connect, $_POST['clients']);
$completion = mysqli_real_escape_string($db_connect, $_POST['completion']);
$type = mysqli_real_escape_string($db_connect, $_POST['type']);
$authors = mysqli_real_escape_string($db_connect, $_POST['authors']);
$budget = mysqli_real_escape_string($db_connect, $_POST['budget']);

$project_image = $_FILES['project_image'];
$after_explode = explode('.', $project_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'JPG', 'JPEG', 'PNG');

if($project_image['name'] != ''){
	if(in_array($extension, $allowed_extension)){
		if($project_image['size'] < 5000000){

			$select_image = "SELECT * FROM projects WHERE id=$id";
			$select_image_result = mysqli_query($db_connect, $select_image);
			$after_assoc = mysqli_fetch_assoc($select_image_result);

			$delete_from = 'uploaded/'.$after_assoc['project_image'];
			unlink($delete_from);

			$update = "UPDATE projects SET title='$title', clients='$clients', completion='$completion', type='$type', authors='$authors', budget='$budget' WHERE id=$id ";
			$update_result = mysqli_query($db_connect, $update);

			$image_name = "project".$id.'.'.$extension;
			$new_location = 'uploaded/'.$image_name;
			move_uploaded_file($project_image['tmp_name'], $new_location);

			$update_image = "UPDATE projects SET project_image='$image_name' WHERE id=$id ";
			$update_image_result = mysqli_query($db_connect, $update_image);

			$_SESSION['success'] = "Your all settings have been changed successfully!";
			header('location: edit_project.php?id='.$id);

			
		}else{
			$_SESSION['invalid_size'] = "File size too large!";
			header('location: edit_project.php?id='.$id);
		}
	}else{
		$_SESSION['invalid_extension'] = "Invalid Extension!";
		header('location: edit_project.php?id='.$id);
	}
}else{
	$update = "UPDATE projects SET title='$title', clients='$clients', completion='$completion', type='$type', authors='$authors', budget='$budget' WHERE id=$id ";
	$update_result = mysqli_query($db_connect, $update);

	$_SESSION['success'] = "Your all settings have been changed successfully!";
	header('location: edit_project.php?id='.$id);
}