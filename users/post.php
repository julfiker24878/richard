<?php
session_start();
require '../db.php';

$errors = [];
$field_names = ['name'=>'Please enter your name', 'email'=>'Please enter your email address', 'password'=>'Please enter a password', 'cpassword'=>'Please confirm your password'];

foreach($field_names as $field_name=>$msg){
    if(empty($_POST[$field_name])){
        $errors[$field_name] = $msg;
    }
}
if(count($errors) == 0){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $role = $_POST['role'];
    $upper = preg_match('@[A-Z]@', $password);
    $lower = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);
    $special = preg_match('@[^ \w]@', $password);
    date_default_timezone_set('Asia/Dhaka');
    $registered_at = date('Y-m-d h:i:s');

    $select_email = "SELECT count(*) as email_exist from table1 WHERE email='$email' ";
    $select_email_result = mysqli_query($db_connect, $select_email);
    $after_assoc = mysqli_fetch_assoc($select_email_result);

    if(strlen($name) > 100){
        $_SESSION['large_name'] = "Please enter a valid name!";
        header('location: register.php');
    }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $_SESSION['invalid_email'] = "Please enter a valid email address!";
        header('location: register.php');
    }/*elseif(!$upper || !$lower || !$number || !$special || strlen($password) < 8){
        $_SESSION['wk_pass'] = "Please enter a strong password!";
        header('location: register.php');
    }elseif($password != $cpassword){
        $_SESSION['pass_match'] = "Password doesn't matched!";
        header('location: register.php');
    }*/elseif($after_assoc['email_exist'] == 1){
        $_SESSION['email_exists'] = "Email already exist!";
        header('location: register.php');
        }else{
            $hashpassword = password_hash($password, PASSWORD_DEFAULT);
            $hashcpassword = password_hash($cpassword, PASSWORD_DEFAULT);

            $profile_image = $_FILES['profile_image'];
            $image_file = $profile_image['name'];
            $after_explode = explode('.', $image_file);
            $extension = end($after_explode);
            $allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'svg', 'PNG', 'JPG', 'JPEG');
            if(in_array($extension, $allowed_extension)){
                if($profile_image['size'] < 800000){

                    $insert = "INSERT INTO table1(name, email, role, password, registered_at) VALUES('$name','$email', '$role', '$hashpassword','$registered_at')";
                    $insert_result = mysqli_query($db_connect, $insert);

                    $id = mysqli_insert_id($db_connect);
                    $image_name = $id.'.'.$extension;
                    $new_location = '../uploads/profile/'.$image_name;
                    move_uploaded_file($profile_image['tmp_name'], $new_location);

                    $update_image = "UPDATE table1 SET profile_image='$image_name' WHERE id=$id ";
                    $update_image_result = mysqli_query($db_connect, $update_image);

                    $_SESSION['success'] = "Sign up successful!";
                    header('location: register.php');

                }else{
                    $_SESSION['invalid_size'] = "File size too large!";
                    header('location: register.php');
                }

            }else{
                $_SESSION['invalid_extension'] = "Invalid Extension!";
                header('location: register.php');
            }
        }
}else{
    $_SESSION['err'] = $errors;
    header('location: register.php');
}

