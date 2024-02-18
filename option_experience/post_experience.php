<?php 
session_start();
require '../db.php';
require '../session.php';

$duration = mysqli_real_escape_string($db_connect, $_POST['duration']);
$company = mysqli_real_escape_string($db_connect, $_POST['company']);
$designation = mysqli_real_escape_string($db_connect, $_POST['designation']);
$des = mysqli_real_escape_string($db_connect, $_POST['des']);

$insert_experiences = "INSERT INTO experiences(duration, company, designation, des) VALUES('$duration','$company','$designation','$des')";
$insert_experiences_result = mysqli_query($db_connect, $insert_experiences);

$_SESSION['success'] = "Experience Informations have been added successfully!";
header('location: add_experience.php');