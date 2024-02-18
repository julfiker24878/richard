<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$update = "UPDATE contact SET name='$name', email='$email', message='$message' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_contact.php?id='.$id);