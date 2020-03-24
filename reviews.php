<?php
session_start();
require "dbh.inc.php";
 ?>


<!DOCTYPE html>
<html>
  <head>
    <title>AllReviews</title>
    <link rel="stylesheet" href="review.css"/>
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"/>
  </head>

  <body>
    <div class="container">
      <h1>Eco Mall</h1>
      <div class="nav">
        <nav>
          <table align = "center">
            <tr>
              <td><a href="loginpage.php">Login/SignUp</a></td>
              <td><a href="index.html">About</a></td>
              <td><a href="shop.html">SHOP!</a></td>
              <td><a href="contact.html">Contact Us</a></td>
              <td><a href="cart.html">Shopping Bag</a></td>
            </tr>
          </table>
        </nav>
      </div>

      <?php
      //if we don't have the session variables set in the website then the user is logged in
      if (!isset($_SESSION['reviewId'])) {
        echo '<form action="reviews.inc.php" method="post">
          <input type="text" name="mailuid" placeholder="E-mail/Username">
          <input type="password" name="pwd" placeholder="Password">
          <button type="submit" name="login-submit">Login</button>
        </form>
        <div class="signup-button">
        <a href="signup.php" class="header-signup">Signup</a>
        </div>';
      }
      //if we have the session variables set in the website then the user is logged in
      else if (isset($_SESSION['reviewId'])) {
        echo '<form action="logout.inc.php" method="post">
          <button type="submit" name="login-submit">Logout</button>
        </form>';

        echo'<h1>Now you can shop!</h1>
        <a href="shop.php">SHOP!</a>';
      }
?>


    </div>

  </body>
  </html>
