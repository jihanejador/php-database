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
if (isset($_POST['login'])){

    $email = cleanInput($_POST['email']);
    $password = $_POST['password'];

    $sql = "SELECT * FROM user WHERE email = '$email'";
    $result = $xonn->query($sql);

    if ($result->num_rows == 1){
        $user = $result->ftech_assoc();

        if (password_verify($password,$user['password'])){

        $_SESSION['user']=$user['firstname'];
        $_SESSION['role'] = $user['role'];

        header("Location: ../public/dashboard.php");
        } else{
            header("Location: ../public/login.php?error=invalid");
        }
    } else {
        header("Location: ../public/login.php?error=invalid");
    }
}
?>