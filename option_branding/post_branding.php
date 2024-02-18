<?php 
session_start();
require '../db.php';
require '../session.php';

$brand_name = $_POST['brand_name'];

$brand_image = $_FILES['brand_image'];
$after_explode = explode('.', $brand_image['name']);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'JPG', 'JPEG', 'PNG', 'svg');

if (in_array($extension, $allowed_extension)) {
	if($brand_image['size'] < 5000000){
		$insert = "INSERT INTO brandings(brand_name) VALUES('$brand_name')";
        $insert_result = mysqli_query($db_connect, $insert);

		$id = mysqli_insert_id($db_connect);
		$brand_image_name = "branding".$id.".".$extension;
		$new_location = 'uploaded/'.$brand_image_name;
		move_uploaded_file($brand_image['tmp_name'], $new_location);

		$update_image = "UPDATE brandings SET brand_image='$brand_image_name' WHERE id=$id ";
        $update_image_result = mysqli_query($db_connect, $update_image);

		$_SESSION['success'] = "Branding Image has been added successfully!";
		header('location: add_branding.php');
	}else{
		$_SESSION['invalid_size'] = "File size too large!";
		header('location: add_branding.php');
	}
}else{
	$_SESSION['invalid_extension'] = "Invalid Extension!";
	header('location: add_branding.php');
}