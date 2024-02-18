<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$email = $_POST['email'];

$update = "UPDATE subscribers SET email='$email' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_subscribe.php?id='.$id);