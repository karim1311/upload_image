<?php
try {
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "funval";
    $dsn = "mysql:host=$host;dbname=$dbname";

    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}