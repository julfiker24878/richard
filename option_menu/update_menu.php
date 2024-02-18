<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$name = mysqli_real_escape_string($db_connect, $_POST['name']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$update = "UPDATE menu SET name='$name', link='$link' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Name changes successfully!";
header('location: edit_menu.php?id='.$id);