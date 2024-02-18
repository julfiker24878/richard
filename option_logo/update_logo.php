<?php
session_start();
require '../session.php';
require '../db.php';
$id = $_POST['id'];
$logo_text = $_POST['logo_text'];

$update = "UPDATE logo SET logo_text='$logo_text' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your site title has been changed successfully!";
header('location: edit_logo.php?id='.$id);