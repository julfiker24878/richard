<?php

session_start(); 
require '../db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$select = "SELECT count(*) as email_exist FROM table1 WHERE email='$email' ";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

if($after_assoc['email_exist'] == 1){
    $select = "SELECT * FROM table1 WHERE email='$email' ";
    $select_result = mysqli_query($db_connect, $select);
    $after_assoc = mysqli_fetch_assoc($select_result);

    if(password_verify($password, $after_assoc['password'])){
        $_SESSION['sweet_done'] = "okay!";
        $_SESSION['login_done'] = "okay!";
        $_SESSION['username'] = $after_assoc['name'];
        $_SESSION['user_email'] = $after_assoc['email'];
        $_SESSION['user_profile'] = $after_assoc['profile_image'];
        $_SESSION['user_role'] = $after_assoc['role'];
        $_SESSION['user_id'] = $after_assoc['id'];
        header('location: ../admin.php');
    }else{
        $_SESSION['password_unmatched'] = "Password doesn't matched!";
        header('location: login.php');
    }
}else{
    $_SESSION['email_not_exist'] = "Email doesn't matched!";
    header('location: login.php');
}