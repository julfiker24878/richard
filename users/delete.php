<?php
session_start();
require '../db.php';

$id = $_GET['id'];

$select_image = "SELECT * FROM table1 WHERE id=$id";
$select_image_result = mysqli_query($db_connect, $select_image);
$after_assoc = mysqli_fetch_assoc($select_image_result);

$delete_from = '../uploads/profile/'.$after_assoc['profile_image'];
unlink($delete_from);

$delete = "DELETE FROM table1 WHERE id=$id";
$delete_query = mysqli_query($db_connect, $delete);

$_SESSION['deleted'] = "User has been deleted successfully!";
header('location: view.php');