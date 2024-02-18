<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$heading = mysqli_real_escape_string($db_connect, $_POST['heading']);
$description = mysqli_real_escape_string($db_connect, $_POST['description']);
$btn_text = mysqli_real_escape_string($db_connect, $_POST['btn_text']);

$banner_image = $_FILES['banner_image'];
$after_explode = explode('.', $banner_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'jpeg', 'png', 'svg', 'gif', 'JPG', 'JPEG', 'PNG');

if($banner_image['name'] != ''){
	if(in_array($extension, $allowed_extension)){
		if($banner_image['size'] < 5000000){

			$select_image = "SELECT * FROM banner WHERE id=$id";
			$select_image_result = mysqli_query($db_connect, $select_image);
			$after_assoc = mysqli_fetch_assoc($select_image_result);

			$delete_from = 'uploaded/'.$after_assoc['banner_image'];
			unlink($delete_from);

			$update = "UPDATE banner SET heading='$heading', description='$description', btn_text='$btn_text' WHERE id=$id ";
			$update_result = mysqli_query($db_connect, $update);

			$image_name = "banner".$id.'.'.$extension;
			$new_location = 'uploaded/'.$image_name;
			move_uploaded_file($banner_image['tmp_name'], $new_location);

			$update_image = "UPDATE banner SET banner_image='$image_name' WHERE id=$id ";
			$update_image_result = mysqli_query($db_connect, $update_image);

			$_SESSION['success'] = "Your all settings have been changed successfully!";
			header('location: edit_banner.php?id='.$id);

			
		}else{
			$_SESSION['invalid_size'] = "File size too large!";
			header('location: edit_banner.php?id='.$id);
		}
	}else{
		$_SESSION['invalid_extension'] = "Invalid Extension!";
		header('location: edit_banner.php?id='.$id);
	}
}else{
	$update = "UPDATE banner SET heading='$heading', description='$description', btn_text='$btn_text' WHERE id=$id ";
	$update_result = mysqli_query($db_connect, $update);

	$_SESSION['success'] = "Your all settings have been changed successfully!";
	header('location: edit_banner.php?id='.$id);
}