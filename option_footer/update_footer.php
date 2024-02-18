<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$phone = mysqli_real_escape_string($db_connect, $_POST['phone']);
$email = mysqli_real_escape_string($db_connect, $_POST['email']);
$credit = mysqli_real_escape_string($db_connect, $_POST['credit']);

$update = "UPDATE footer SET phone='$phone', email='$email', credit='$credit' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_footer.php?id='.$id);