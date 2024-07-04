<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

   
    $dsn = "mysql:host=localhost;dbname=hymn";
    $dbusername = "root";
    $dbpassword = "";

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

       
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            
            $_SESSION["username"] = $username;

            
            header("Location: cat-page.html");
            exit();
        } else {
            
            echo '<script>alert("Invalid username or password ");</script>';

            echo '<script>setTimeout(function() { window.location.href = "sign-in.php"; }, 100);</script>';
        }
    } catch (PDOException $e) {
        echo '<div class="error-message">Error: ' . $e->getMessage() . '</div>';
    } finally {
        
        $pdo = null;
        $stmt = null;
    }
}
?>
