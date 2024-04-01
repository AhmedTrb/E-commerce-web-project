<?php
session_start();

$host = 'localhost' ;
$dbname = 'setupsprint_ecommerce_website';
$username = 'root';
$password = '';

try {
    $connect = new PDO("mysql:host=$host;port=3307;dbname=$dbname", $username, $password);
    
    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

