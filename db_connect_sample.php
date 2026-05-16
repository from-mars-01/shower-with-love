<?php
    $host = 'localhost';
    $dbname = 'owbybedoiub891';
    $username = 'epdjnp2o990d';
    $password = 'ewlfkjb2308u4';

    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

    try{
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo "Connected successfully";
    } catch (PDOException $e) {
        die("connection failed: ".$e->getMessage());
    }
?>