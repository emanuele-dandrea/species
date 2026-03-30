<?php
    require './database.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

        $stmt = $pdo->prepare("INSERT INTO users (username, password_hash) VALUES (:username, :password_hash)");

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password_hash', $password);

        if ($stmt->execute()) {
            echo "Registration successful!";
        } else {
            echo "Error: Could not register user.";
        }
    }
?>
