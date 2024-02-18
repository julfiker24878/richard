<?php 
session_start();
require '../db.php';
require '../session.php';

$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);
date_default_timezone_set('Asia/Dhaka');
$posted_at = date('Y-m-d');
$blog_image = $_FILES['blog_image'];

$after_explode = explode('.', $blog_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($blog_image['size'] < 5000000){
		$insert = "INSERT INTO blogs(title, des, posted_at) VALUES('$title','$des','$posted_at')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$blog_image_name = "blog".$id.".".$extension;
		$new_location = 'uploaded/'.$blog_image_name;
		move_uploaded_file($blog_image['tmp_name'], $new_location);

		$update_image = "UPDATE blogs SET blog_image='$blog_image_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Your post has been successfully published!";
		header('location: add_blog.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_blog.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_blog.php');
}