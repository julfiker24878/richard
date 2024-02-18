<?php 
session_start();
require '../db.php';
require '../session.php';

$title = mysqli_real_escape_string($db_connect, $_POST['title']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);
$service_icon = mysqli_real_escape_string($db_connect, $_POST['service_icon']);

$insert = "INSERT INTO services(title, des, service_icon) VALUES('$title','$des','$service_icon')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Service added successfully!";
header('location: add_service.php');