<?php
$server="localhost";
$dbname="edusync";
$dbuser="root";
$dbpasw = "";
try {
    $conn=new PDO("mysql:host=$server;dbname=$dbname", $dbuser, $dbpasw);
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>