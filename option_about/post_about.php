<?php 
session_start();
require '../db.php';
require '../session.php';

$heading = $_POST['heading'];
$des = $_POST['des'];
$year = $_POST['year'];

$insert_about = "INSERT INTO about(heading, des, year) VALUES('$heading','$des','$year')";
$insert_about_result = mysqli_query($db_connect, $insert_about);

$_SESSION['success'] = "Skill has been added successfully!";
header('location: add_about.php');