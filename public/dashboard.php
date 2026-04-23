<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit();
}

include("../includes/header.php");
?>
<h1>Bienvenue <?php echo $_SESSION['user']; ?></h1>

<?php include("../includes/footer.php"); ?>