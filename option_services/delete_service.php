<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$delete_service = "DELETE FROM services WHERE id=$id";
$delete_service_query = mysqli_query($db_connect, $delete_service);

$_SESSION['deleted'] = "Deleted Successfully!";
header('location: view_service.php');