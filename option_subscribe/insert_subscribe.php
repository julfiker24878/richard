<?php
session_start();
require '../db.php';

$email = $_POST['email'];
date_default_timezone_set('Asia/Dhaka');
$created_at = date('Y-m-d h:i:s');

$insert = "INSERT INTO subscribers(email, created_at) VALUES('$email', '$created_at')";
$insert_query = mysqli_query($db_connect, $insert);

$_SESSION['success_subscribe'] = "Thanks for subscribing!";
header("location: ../index.php");