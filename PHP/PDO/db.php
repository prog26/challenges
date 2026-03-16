<?php
$host = "localhost";
$dbname = "test";
$user = "root";
$password = "";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);

    echo "Connexion réussie";

}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}













?>