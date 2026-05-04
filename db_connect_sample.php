<?php
    $host = 'localhost';
    $dbname = 'dbokblagad58er';
    $username = 'umhq0dudh5q34';
    $password = '715}2@1|%1q{';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    try{
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully";
    } catch (PDOException $e) {
        die("connection failed: ".$e->getMessage());
    }
?>