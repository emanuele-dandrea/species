<?php
    $host = 'localhost';
    $db = 'species';
    $user = 'root';
    $password = '';

    try {
        $pdo = new PDO("mariadb:host=$host;dbname=$db", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die("Could not connect to the database $db :" . $e->getMessage());
    }
?>
