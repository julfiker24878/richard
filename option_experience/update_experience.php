<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$duration = mysqli_real_escape_string($db_connect, $_POST['duration']);
$company = mysqli_real_escape_string($db_connect, $_POST['company']);
$designation = mysqli_real_escape_string($db_connect, $_POST['designation']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);

$update = "UPDATE experiences SET duration='$duration', company='$company', designation='$designation', des='$des' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_experience.php?id='.$id);