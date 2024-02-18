<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$select_social_account = "SELECT * FROM social_accounts WHERE id=$id";
$select_services_resutl = mysqli_query($db_connect, $select_social_account);
$after_assoc = mysqli_fetch_assoc($select_services_resutl);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE social_accounts SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location: view_social_account.php');

}else{
    $update_status = "UPDATE social_accounts SET status=1 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location: view_social_account.php');
}