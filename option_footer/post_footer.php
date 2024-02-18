<?php 
session_start();
require '../db.php';
require '../session.php';

$phone = mysqli_real_escape_string($db_connect, $_POST['phone']);
$email = mysqli_real_escape_string($db_connect, $_POST['email']);
$credit = mysqli_real_escape_string($db_connect, $_POST['credit']);

$insert_footer = "INSERT INTO footer(phone, email, credit) VALUES('$phone','$email','$credit')";
$insert_footer_result = mysqli_query($db_connect, $insert_footer);

$_SESSION['success'] = "Footer Informations have been added successfully!";
header('location: add_footer.php');