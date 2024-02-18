<?php 
session_start();
require '../db.php';
require '../session.php';

$name = mysqli_real_escape_string($db_connect, $_POST['name']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$insert_menu = "INSERT INTO menu(name, link) VALUES('$name','$link')";
$insert_menu_result = mysqli_query($db_connect, $insert_menu);

$_SESSION['success'] = "Manu Item has been added successfully!";
header('location: add_menu.php');