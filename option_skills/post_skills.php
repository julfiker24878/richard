<?php 
session_start();
require '../session.php';
require '../db.php';

$skill = $_POST['skill'];
$percentage = $_POST['percentage'];

$insert_skills = "INSERT INTO skills(skill, percentage) VALUES('$skill','$percentage')";
$insert_skills_result = mysqli_query($db_connect, $insert_skills);

$_SESSION['success'] = "Skill has been added successfully!";
header('location: add_skills.php');