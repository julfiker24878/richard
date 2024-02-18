<?php
session_start();
require '../session.php';
require '../db.php';

$id = $_GET['id'];

$select_services = "SELECT * FROM services WHERE id=$id";
$select_services_resutl = mysqli_query($db_connect, $select_services);
$after_assoc = mysqli_fetch_assoc($select_services_resutl);

if($after_assoc['status'] == 1){
    $update_status = "UPDATE services SET status=0 WHERE id=$id";
    $update_status_result = mysqli_query($db_connect, $update_status);
    header('location: view_service.php');

}else{

    $select = "SELECT count(*) as active_services FROM services WHERE status=1";
    $select_query = mysqli_query($db_connect, $select);
    $assoc = mysqli_fetch_assoc($select_query);

    if ($assoc['active_services'] == 3) {
        $_SESSION['failed'] = "Maximum 3 Active Service!";
        header('location: view_service.php');
    }else{
        $update_status = "UPDATE services SET status=1 WHERE id=$id";
        $update_status_result = mysqli_query($db_connect, $update_status);
        header('location: view_service.php');
    }
}