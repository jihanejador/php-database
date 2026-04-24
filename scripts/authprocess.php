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
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (firstname, lastname, email, password)
            VALUES('$firstname','lastname','email','$hashedPassword')";
    if ($conn->query($sql)){
        header("Location: ../public/login.php?success=1");
    }
}