<?php 
session_start();
require '../db.php';
require '../session.php';

$comment = mysqli_real_escape_string($db_connect, $_POST['comment']);
$name = mysqli_real_escape_string($db_connect, $_POST['name']);
$designation = mysqli_real_escape_string($db_connect, $_POST['designation']);

$insert_testimonials= "INSERT INTO testimonials(comment, name, designation) VALUES('$comment','$name','$designation')";
$insert_testimonials_result = mysqli_query($db_connect, $insert_testimonials);

$_SESSION['success'] = "Testimonial Informations have been added successfully!";
header('location: add_testimonial.php');