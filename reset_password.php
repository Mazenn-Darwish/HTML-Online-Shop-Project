<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $newPassword = $_POST["NewPassword"];
    $confirmNewPassword = $_POST["ConfirmNewPassword"];

    $dsn = "mysql:host=localhost;dbname=hymn";
    $dbusername = "root";
    $dbpassword = "";

    try {
        $pdo = new PDO($dsn, $dbusername, $dbpassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        if ($newPassword !== $confirmNewPassword) {
            echo '<script>alert("Passwords do not match");</script>';

            echo '<script>setTimeout(function() { window.location.href = "PasswordReset.php"; }, 100);</script>';
            exit(); 
        }


        $checkUsernameQuery = "SELECT * FROM users WHERE username = ?";
        $stmt = $pdo->prepare($checkUsernameQuery);
        $stmt->execute([$username]);

        if ($stmt->rowCount() == 0) {
            echo '<script>alert("No account found with the provided username. ");</script>';

            echo '<script>setTimeout(function() { window.location.href = "PasswordReset.php"; }, 100);</script>';
            exit(); 
        }

        $updatePasswordQuery = "UPDATE users SET password = ? WHERE username = ?";
        $stmt = $pdo->prepare($updatePasswordQuery);
        $stmt->execute([$newPassword, $username]);
        echo '<script>alert("Password reset successfully  ");</script>';
        
        echo '<script>setTimeout(function() { window.location.href = "sign-in.php"; }, 100);</script>';
        exit();
    } catch (PDOException $e) {
        echo '<div class="error-message">Error: ' . $e->getMessage() . '</div>';
    } finally {
        $pdo = null;
        $stmt = null;
    }
}
?>
