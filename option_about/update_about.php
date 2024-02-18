<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$heading = $_POST['heading'];
$des = $_POST['des'];
$year = $_POST['year'];

$update = "UPDATE about SET heading='$heading', des='$des', year='$year' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_about.php?id='.$id);