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

        .success-message {
            color: green;
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
        <a href="Homepage.html" class="nav-link">Home</a>
        <a href="contact.html" class="nav-link">Contact Us</a>
        <a href="about.html" class="nav-link">About Us</a>
    </div>
</div>

<div class="container">
    <div class="form-container" id="signupForm">
        <h2>Create an Account</h2>
        <form action="formhandler.php" method="post" onsubmit="return validateSignupForm()">
        <div class="form-group">
                <label for="username">Username</label>
                <input type="username" id="username" name="username" placeholder="Enter your username" required>
                <div id="username-error" class="error-message"></div>
            </div>
            <div class="form-group">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>
                <div id="fullname-error" class="error-message"></div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <div id="email-error" class="error-message"></div>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Create a password" required>
                <div id="password-error" class="error-message"></div>
            </div>
            <div class="form-group">
                <button type="submit">Sign up</button>
            </div>
            <div id="success-message" class="success-message"></div>
            <div class="form-footer">
                <p>Already have an account? <a href="sign-in.php">Login</a></p>
            </div>
        </form>
    </div>
</div>

</body>
</html>
