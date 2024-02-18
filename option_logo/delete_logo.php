<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$delete = "DELETE FROM logo WHERE id=$id";
$delete_result = mysqli_query($db_connect, $delete);

$_SESSION['deleted'] = "Logo removed Successfully!";
header('location: view_logo.php');