<?php 

$host = 'localhost';
$db = 'cicciobello';
$user = 'pippo';
$password = '1234';

/* $pdo = new PDO("mysql:host=$host; dbname=$db",$user,$password);

$pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  */

try {
    $pdo = new PDO("mysql:host=$host; dbname=$db",$user,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Errore di connessione:" . $e->getMessage());
}