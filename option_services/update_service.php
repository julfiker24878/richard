<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);
$service_icon = mysqli_real_escape_string($db_connect, $_POST['service_icon']);

$update = "UPDATE services SET title='$title', des='$des', service_icon='$service_icon' WHERE id=$id";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_service.php?id='.$id);