<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Baggage Share</title>
  <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
  <div class="hero-container">
    <img class="logo-img" src="./static/img/logo.png" alt="logo">
    <div class="sel-btn">
      <button id="login" class="ls">Login</button><button id="signup" class="ls">Sign Up</button>
    </div>
<form action="validation.php" method="post">
    <div class="login-usr">
      <input type="text" name="USN" value="Username">
      <input type="password" name="Pswd" value="password">
      <button id="login-btn">Login</button>
    </div>
</form>
<form action="registration.php" method="post">  
    <div class="signup-usr">
        <input type="text" name="USN-su" value="Username">
        <input type="password" name="Pswd-su" value="password">
        <input type="text" name="aadhar" value="Aadhar">
        <button id="signup-btn">SignUp</button>
      </div>
</form>  
  </div>
  <script src="/static/js/main.js"></script>
</body>
</html>