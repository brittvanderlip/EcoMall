<?php
  session_start();
  require "dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. This will often show up in search results.">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="loginSignup.css">
  </head>
  <body>
    <h1>Login Page</h1>

    <header>
      <nav class="nav-header-main">
        <ul>
          <li><a href="index.html">Home</a></li>
        </ul>
      </nav>
      <div class="header-login">
        <?php
        //if we don't have the session variables set in the website then the user is logged in
        if (!isset($_SESSION['id'])) {
          echo '<form action="Includes/login.inc.php" method="post">
            <input type="text" name="emailusername" placeholder="E-mail/Username">
            <input type="password" name="password" placeholder="Password">
            <button type="submit" name="login-submit">Login</button>
          </form>
          <div class="signup-button">
          <a href="signup.php" class="header-signup">Signup</a>
          </div>';
        }
        //if we have the session variables set in the website then the user is logged in
        else if (isset($_SESSION['id'])) {
          echo '<form action="Includes/logout.inc.php" method="post">
            <button type="submit" name="login-submit">Logout</button>
          </form>';

          echo'<h1>Now you can shop!</h1>
          <a href="shop.php">SHOP!</a>';
        }
        ?>
      </div>
    </header>
