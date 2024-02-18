<?php 
session_start();
require '../db.php';
require '../session.php';

$account_name = mysqli_real_escape_string($db_connect, $_POST['account_name']);
$icon = mysqli_real_escape_string($db_connect, $_POST['icon']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$insert = "INSERT INTO social_accounts(account_name, icon, link) VALUES('$account_name','$icon','$link')";
$insert_result = mysqli_query($db_connect, $insert);

$_SESSION['success'] = "Account added successfully!";
header('location: add_social_account.php');