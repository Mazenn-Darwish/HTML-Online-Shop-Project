<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Sign Up Form</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
    <script>
        function validateLoginForm() {
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

            var usernameError = document.getElementById("username-error");
            var passwordError = document.getElementById("password-error");

            
            usernameError.textContent = "";
            passwordError.textContent = "";

            if (username.trim() === "") {
                usernameError.textContent = "Please enter your username";
                return false;
            }

            if (password.trim() === "") {
                passwordError.textContent = "Please enter your password";
                return false;
            }


            return true;
        }
    </script>
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
            <h2>Welcome Back!</h2>
            <form action="login.php" method="post" onsubmit="return validateLoginForm()">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username" required>
                    <div id="username-error" class="error-message"></div>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter your password" required>
                    <div id="password-error" class="error-message"></div>
                </div>
                <div class="form-group">
                    <button type="submit">Login</button>
                </div>
                <div class="form-footer">
                    <p>Don't have an account? <a href="signup.php">Sign Up</a></p>

                </div>
                <div class="form-footer">
                    <p>Forgot yo password ? <a href="PasswordReset.php">Click here to reset it</a></p>
                    
                </div>
            </form>
        </div>
    </div>

</body>
</html>
