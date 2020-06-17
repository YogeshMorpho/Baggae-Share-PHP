<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Baggage Share</title>
  <link rel="stylesheet" href="../static/css/tsb.css">
  <link rel="stylesheet" href="../static/css/profile.css">
</head>
<body>
  
  <div class="topbar">
    <img class="ham" src="../static/img/menu.svg" alt="menu">
    <img class="logo" src="../static/img/logo.png" alt="logo">
    <img class="chat" src="../static/img/chat.svg" alt="chat">
  </div>
  <div class="dashboard-container">
    <div class="profile">
      <img class="dp" src="../static/img/profile.svg" alt="profile">
      <p>Name: <?php echo $_SESSION['username'] ?></p>
      <p>Email Id:<?php echo $_SESSION['email'] ?></p>
      <p>Aadhar Number:<?php echo $_SESSION['aadhar'] ?></p>
    </div>
    
  </div>
  <div class="sidebar-container">
    <div class="sidebar">
      <div class="topbar">
        <img class='close-btn' src="../static/img/close.svg" alt="close">
      </div>
      <a class="menu-option" href="./profile.php">Profile</a>
      <a class="menu-option" href="./dashboard.html">Dashboard</a>
      <a class="menu-option" href="./us.html">About Us</a>
      <a class="menu-option" href="./contact.html">Contact Us</a>
      <a class="menu-option" href="../app.php">Logout</a>
    </div>
  </div>
  <div class="chatbar-container">
    <div class="chatbar">
      <div class="topbar">
        <img class='chat-close-btn' src="../static/img/close.svg" alt="close">
      </div>
      <a class="menu-option" href="./chat.html">Flight 18A</a>
      <a class="menu-option" href="./chat.html">Flight 42B</a>
      <a class="menu-option" href="./chat.html">Flight 726</a>
      <a class="menu-option" href="./chat.html">Flight 89C</a>
    </div>
  </div>
  <script src="../static/js/tsb.js"></script>
</body>
</html>

