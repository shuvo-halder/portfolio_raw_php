<?php
session_start();

$host = '127.0.0.1';
$db_name = 'shuvo_raw';
$db_user = 'root';
$db_password = '';


try {
    $conn = new PDO("mysql:host=$host;dbname=$db_name",$db_user,$db_password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed ". $e->getMessage();
}