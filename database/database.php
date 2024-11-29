<?php
session_start();

$host = '127.0.0.1';
$db_name = 'shuvo_raw';
$db_user = 'root';
$db_password = '';


try {
    $DBH = new PDO("mysql:host=$host;dbname=$db_name",$db_user,$db_password);
    $DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connection failed ". $e->getMessage();
}