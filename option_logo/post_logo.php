<?php 

session_start();
require '../db.php';
require '../session.php';

$logo_text = $_POST['logo_text'];

$insert = "INSERT INTO logo(logo_text) VALUES('$logo_text')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Site Title has been added successfully!";
header('location: add_logo.php');
