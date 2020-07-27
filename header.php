<?php
  session_start();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In/Out System</title>
    <link rel="stylesheet" href="style.css">
    <!--https://www.youtube.com/watch?v=LC9GaXkdxF8-->

  </head>
  <body>

    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="#">
          <img src="img/logo.png" alt="logo">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li></li>
          <li><a href="#">Portfolio</a></li></li>
          <li><a href="#">About Me</a></li></li>
          <li><a href="#">Contact</a></li></li>
        </ul>
        <div class="header-login">
          <?php
          if (isset($_SESSION['userId'])){
            echo'<form action="includes/logout.inc.php" method="post">
              <button type="submit" name="logout-submit">Logout</button>
            </form>';
          }
          else {
            echo '<form action="includes/login.inc.php" method="post">
              <input type="text" name="mailuid" placeholder="Username/E-mail...">
              <input type="password" name="pwd" placeholder="Password...">
              <button type="submit" name="login-submit">Login</button>
            </form>
            <a href="signup.php">Signup</a>';
          }

           ?>

        </div>
      </nav>

    </header>
