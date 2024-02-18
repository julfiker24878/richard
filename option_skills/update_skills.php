<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$skill = $_POST['skill'];
$percent = $_POST['percent'];

$update = "UPDATE skills SET skill='$skill', percentage='$percent' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_skills.php?id='.$id);