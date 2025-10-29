<?php

$host = "127.0.0.1";
$dbname = 'Livre_Or';
$user = "root";
$pass="";

try {
    $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
} catch (PDOException $e) {
    echo "Erreur de connexion";
    return null;

}




?>