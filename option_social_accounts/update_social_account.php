<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_POST['id'];
$account_name = mysqli_real_escape_string($db_connect, $_POST['account_name']);
$icon = mysqli_real_escape_string($db_connect, $_POST['icon']);
$link = mysqli_real_escape_string($db_connect, $_POST['link']);

$update = "UPDATE social_accounts SET account_name='$account_name', icon='$icon', link='$link' WHERE id=$id ";
$update_result = mysqli_query($db_connect, $update);

$_SESSION['success'] = "Your all settings have been changed successfully!";
header('location: edit_social_account.php?id='.$id);