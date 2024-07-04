<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $dsn = "mysql:host=localhost;dbname=hymn";
    $dbusername = "root";
    $dbpassword = "";

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        
        $checkQuery = "SELECT COUNT(*) FROM users WHERE username = ?";
        $checkStmt = $pdo->prepare($checkQuery);
        $checkStmt->execute([$username]);
        $count = $checkStmt->fetchColumn();

        if ($count > 0) {
            echo '<script>alert("Username already exists. Please choose a different username.");</script>';
            
            echo '<script>setTimeout(function() { window.location.href = "signup.php"; }, 100);</script>';
        } else {
           
            $insertQuery = "INSERT INTO users (username, name, email, password) VALUES (?, ?, ?, ?)";
            $insertStmt = $pdo->prepare($insertQuery);
            $insertStmt->execute([$username, $fullname, $email, $password]);
            echo '<script>alert("User registered successfully!");</script>';
           
            echo '<script>setTimeout(function() { window.location.href = "sign-in.php"; }, 100);</script>';
        }
    } catch (PDOException $e) {
        echo '<div class="error-message">Error: ' . $e->getMessage() . '</div>';
    } finally {
        $pdo = null;
        $checkStmt = null;
        $insertStmt = null;
    }
}

?>
