<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>

<div class="container">
    <h1>Welcome Back Driver</h1><br>
    <br>
    <h4>Login</h4><br>
    <div class="credentials">
    <form action="process_login.php" method="post"> <!-- Update action to process_login.php -->
    <label for="username">Username</label><br>
    <input type="text" name="username" id="username" required maxlength="20" placeholder="Enter your Username" autofocus><br>
    <label for="email">Email</label><br>
    <input type="email" name="email" id="email" required><br>
    <label for="password">Password</label><br>
    <input type="password" name="password" id="password" required maxlength="10"><br>
    <div class="login_btn">
        <input type="submit" value="Login">
    </div>
</form>

        <h4>Do not have an account?</h4><br>
        <h5 class="signup_link">
            <a href="signup.php">Register Here</a>
        </h5>
    </div>
</div>
<script src="login.js"></script>
</body>
</html>
