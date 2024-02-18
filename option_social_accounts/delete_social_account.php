<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$delete_social_account = "DELETE FROM social_accounts WHERE id=$id";
$delete_social_account_query = mysqli_query($db_connect, $delete_social_account);

$_SESSION['deleted'] = "Deleted Successfully!";
header('location: view_social_account.php');