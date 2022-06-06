<?php

$server = 'fdb31.125mb.com:3306';
$username = '3942040_login';
$password = '123456789P';
$database = '3942040_login';

$islogin = false;

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}

?>