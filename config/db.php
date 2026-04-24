<?php
try {
    $conn= new PDO("mysql:host=localhost:3307;dbname=edusync","root","");

} catch (PDOException $e){
    echo "connection failed" .$e->getMessage();
    }
?>