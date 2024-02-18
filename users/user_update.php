<?php

session_start();
require '../db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$current_password = $_POST['vpassword'];
$confirm_password = $_POST['cpassword'];
$new_password = $_POST['npassword'];
$password_hash = password_hash($new_password, PASSWORD_DEFAULT);

$select = "SELECT * FROM table1 WHERE id=$id";
$select_result = mysqli_query($db_connect, $select);
$after_assoc = mysqli_fetch_assoc($select_result);

$profile_image = $_FILES['profile_image'];
$image_file = $profile_image['name'];
$after_explode = explode('.', $image_file);
$extension = end($after_explode);
$allowed_extension = array('jpg', 'png', 'jpeg', 'gif', 'svg', 'PNG', 'JPG', 'JPEG');

if(empty($new_password)){

    if($image_file != ''){

        if(in_array($extension, $allowed_extension)){

            if($profile_image['size'] < 800000){

                $delete_from = '../uploads/profile/'.$after_assoc['profile_image'];
                unlink($delete_from);

                $update = "UPDATE table1 SET name='$name' WHERE id=$id";
                $update_query = mysqli_query($db_connect, $update);

                $image_name = $id.'.'.$extension;
                $new_location = '../uploads/profile/'.$image_name;
                move_uploaded_file($profile_image['tmp_name'], $new_location);

                $update_image = "UPDATE table1 SET profile_image='$image_name' WHERE id=$id ";
                $update_image_result = mysqli_query($db_connect, $update_image);

                $_SESSION['updated'] = "Your changes have been saved successfully!";
                header('location: user_edit.php');

            }else{
                $_SESSION['invalid_size'] = "File size too large!";
                header('location: user_edit.php');
            }

        }else{
            $_SESSION['invalid_extension'] = "Invalid Extension!";
            header('location: user_edit.php');
        }

    }else{
        $update = "UPDATE table1 SET name='$name' WHERE id=$id";
        $update_query = mysqli_query($db_connect, $update);

        $_SESSION['updated'] = "Your changes have been saved successfully!";
        header('location: user_edit.php');
    }

}elseif(!password_verify($current_password, $after_assoc['password'])){
    $_SESSION['wrong_password'] = "Your have entered a worng password!";
    header('location: user_edit.php');
}elseif($new_password != $confirm_password){
    $_SESSION['password_unmatched'] = "Password doesn't matched!";
    header('location: user_edit.php');
}else{
    if($image_file != ''){

        if(in_array($extension, $allowed_extension)){

            if($profile_image['size'] < 8000000){

                $delete_from = '../uploads/profile/'.$after_assoc['profile_image'];
                unlink($delete_from);

                $update = "UPDATE table1 SET name='$name', password='$password_hash' WHERE id=$id";
                $update_query = mysqli_query($db_connect, $update);

                $image_name = $id.'.'.$extension;
                $new_location = '../uploads/profile/'.$image_name;
                move_uploaded_file($profile_image['tmp_name'], $new_location);

                $update_image = "UPDATE table1 SET profile_image='$image_name' WHERE id=$id ";
                $update_image_result = mysqli_query($db_connect, $update_image);

                $_SESSION['pass_success'] = "Your changes have been saved successfully! Please login again.";
                header('location: /richard/login/login.php');

                //$_SESSION['success'] = "Your changes have been saved successfully!";
                //header('location: edit.php?id='.$id);

            }else{
                $_SESSION['invalid_size'] = "File size too large!";
                header('location: user_edit.php');
            }

        }else{
            $_SESSION['invalid_extension'] = "Invalid Extension!";
            header('location: user_edit.php');
        }
    }else{

        $update = "UPDATE table1 SET name='$name', password='$password_hash' WHERE id=$id";
        $update_query = mysqli_query($db_connect, $update);
        
        $_SESSION['pass_success'] = "Your changes have been saved successfully! Please login again.";
        header('location: /richard/login/login.php');

        //$_SESSION['updated'] = "Your changes have been saved successfully!";
        //header('location: user_edit.php');
    }
}