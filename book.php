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
    <h1>Enter Car Details</h1><br>
    <br>
    <h4>Let us Know your Dream Car</h4><br>
    <div class="credentials">
      <form  method="post">
      <label for="carname">Car Name</label><br>
      <input type="text" name="carname" id="carname" maxlength="15"><br>
      <label for="milage">Milage</label><br>
      <input type="text" name="milage" id="milage" maxlength="15"><br>
      <label for="model">Model</label><br>
      <input type="text" name="model" id="model" required><br>
      <label for="yom">Year of Manufacture</label><br>
      <input type="text" name="yom" id="yom" maxlength="10"><br>
      
  
    </form><br>
    <h4>Lets find you a <br>Ride</h4><br>
      <h5 class="back">
        <button class="book_buton">Book  vehicle</button><br><br>
        <a href="index.php">Back to homepage</a>
      </h5>

    </div>
  </div>
</body>
</html>