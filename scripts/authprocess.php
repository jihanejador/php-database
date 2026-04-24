<?php 
session_start();
include("../includes/functions.php");

$conn = new mysqli("localhost", "root", "","edusync");

if (isset($_POST['register'])){
    $firstname = cleanInput($_POST['firstname']);
    $lastname = cleanInput($_POST['lastname']);
    $email  = cleanInput($_POST['email']);
    $password = $_POST['password'];

    if (empty($firstname) || empty($lastname) || empty($email) || empty($password)){
        header("Location: ../public/register.php?error=empty");
        exit();
    }
    
}