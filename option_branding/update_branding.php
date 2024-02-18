<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];

$brand_name = mysqli_real_escape_string($db_connect, $_POST['brand_name']);

$brand_image = $_FILES['brand_image'];
$after_explode = explode('.', $brand_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'JPG', 'JPEG', 'PNG');

if($brand_image['name'] != ''){
	if(in_array($extension, $allowed_extension)){
		if($brand_image['size'] < 5000000){

			$select_image = "SELECT * FROM brandings WHERE id=$id";
			$select_image_result = mysqli_query($db_connect, $select_image);
			$after_assoc = mysqli_fetch_assoc($select_image_result);

			$delete_from = 'uploaded/'.$after_assoc['brand_image'];
			unlink($delete_from);

			$update = "UPDATE brandings SET brand_name='$brand_name' WHERE id=$id ";
			$update_result = mysqli_query($db_connect, $update);

			$image_name = "project".$id.'.'.$extension;
			$new_location = 'uploaded/'.$image_name;
			move_uploaded_file($brand_image['tmp_name'], $new_location);

			$update_image = "UPDATE brandings SET brand_image='$image_name' WHERE id=$id ";
			$update_image_result = mysqli_query($db_connect, $update_image);

			$_SESSION['success'] = "Your all settings have been changed successfully!";
			header('location: edit_branding.php?id='.$id);

			
		}else{
			$_SESSION['invalid_size'] = "File size too large!";
			header('location: edit_branding.php?id='.$id);
		}
	}else{
		$_SESSION['invalid_extension'] = "Invalid Extension!";
		header('location: edit_branding.php?id='.$id);
	}
}else{
	$update = "UPDATE brandings SET brand_name='$brand_name' WHERE id=$id ";
	$update_result = mysqli_query($db_connect, $update);

	$_SESSION['success'] = "Your all settings have been changed successfully!";
	header('location: edit_branding.php?id='.$id);
}