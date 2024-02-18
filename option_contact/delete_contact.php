<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$delete = "DELETE FROM contact WHERE id=$id";
$delete_result = mysqli_query($db_connect, $delete);

$_SESSION['deleted'] = "Deleted Successfully!";
header('location: view_contact.php');