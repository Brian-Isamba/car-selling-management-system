<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="signup.css">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>
<body>
    
  <div class="container">
    <h1>Let's Get Started</h1><br>
    <br>
    <h4>Create Account</h4><br>
    <div class="credentials">
      <form action="insert.php" method="post">
      <label for="firstname">First Name</label><br>
      <input type="text" name="firstname" id="fname" maxlength="15"><br>
      <label for="secondname">Second Name</label><br>
      <input type="text" name="secondname" id="secondname" maxlength="15"><br>
      <label for="email">Email</label><br>
      <input type="email" name="email" id="email" required><br>
      <label for="password">Password</label><br>
      <input type="password" name="password" id="password" maxlength="10"><br>
      <label for="password">Confirm Password</label><br>
      <input type="password" name="password" id="password" maxlength="10"><br>
      <input type="submit"value="Register"><br>
      
    </form><br>
    <h4>Welcome To The <br>Club</h4><br>
      <h5 class="back">
        <a href="index.php">Back to homepage</a>
      </h5>

    </div>
  </div>
</body>
</html>