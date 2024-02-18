<?php
session_start();
require '../db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = mysqli_real_escape_string($db_connect, $_POST['message']);
date_default_timezone_set('Asia/Dhaka');
$created_at = date('Y-m-d h:i:s');

$insert = "INSERT INTO contact(name, email, message, created_at) VALUES('$name', '$email', '$message', '$created_at')";
$insert_query = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Your message has been sent successfully!";
header("location: ../index.php");