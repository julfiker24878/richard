<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$comment = mysqli_real_escape_string($db_connect, $_POST['comment']);
$name = mysqli_real_escape_string($db_connect, $_POST['name']);
$designation = mysqli_real_escape_string($db_connect, $_POST['designation']);

$update = "UPDATE testimonials SET comment='$comment', name='$name', designation='$designation' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_testimonial.php?id='.$id);