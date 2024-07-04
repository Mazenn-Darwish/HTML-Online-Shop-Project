<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
    
</head>
<body>

    <div class="header-container">
        <div class="brand">
            <img src="imgs/Name.png" height="100px" width="150px" class="logo">
        </div>
        <div class="navigation">
            <a href="Homepage.php" class="nav-link">Home</a>
            <a href="contact.html" class="nav-link">Contact Us</a>
            <a href="about.html" class="nav-link">About Us</a>
        </div>
    </div>

    <div class="container">
        <div class="form-container" id="loginForm">
            <h2>Reset Your Password!</h2>
            <form action="reset_password.php" method="post" >
            <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    <div id="username-error" class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="NewPassword">New Password</label>
                    <input type="password" id="NewPassword" name="NewPassword" placeholder="Enter your new password" required>
                    <div id="password-error" class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="ConfirmNewPassword">Confirm New Password</label>
                    <input type="password" id="ConfirmNewPassword" name="ConfirmNewPassword" placeholder="Enter your password again" required>
                    <div id="password-error" class="error-message"></div>
                </div>
                <div class="form-group">
                    <button type="submit">Reset</button>
                </div>
                
            </form>
        </div>
    </div>

</body>
</html>
