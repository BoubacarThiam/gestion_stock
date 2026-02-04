<?php
$host="localhost";
$db="gestion_stock";
$user="root";
$pass="root123";
try{
    $pdo = new PDO(
            "mysql:host=$host;dbname=$db;charset=utf8",
            $user,
            $pass
    );
    echo"connexion reussie";
}catch (PDOException $e){
    die("Erreur de connexion :" . $e->getMessage() );
}