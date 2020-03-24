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

    <header>
      <h1>Signup</h1>
      <div>
        <nav class="nav-header-main signup">
          <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="loginHeader.php">Login/SignUp</a></li>
            <li><a href="contact.html">Contact Us</a></li>
            <li><a href="cart.html">Shopping Bag</a></li>
          </ul>
      </div>
    </header>
    <main>
      <div class="wrapper-main">
        <section class="section-default">
          <?php
          //Error messages viewable by the user
          if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyfields") {
              echo '<p class="signuperror">Fill in all fields!</p>';
            }
            else if ($_GET["error"] == "invaliduidmail") {
              echo '<p class="signuperror">Invalid username and e-mail!</p>';
            }
            else if ($_GET["error"] == "invaliduid") {
              echo '<p class="signuperror">Invalid username!</p>';
            }
            else if ($_GET["error"] == "invalidmail") {
              echo '<p class="signuperror">Invalid e-mail!</p>';
            }
            else if ($_GET["error"] == "passwordcheck") {
              echo '<p class="signuperror">Your passwords do not match!</p>';
            }
            else if ($_GET["error"] == "usertaken") {
              echo '<p class="signuperror">Username is already taken!</p>';
            }
          }
          //Message to let the user know the signup was successful
          else if (isset($_GET["signup"])) {
            if ($_GET["signup"] == "success") {
              echo '<p class="signupsuccess">Signup successful!</p>';
            }
          }
          ?>
          <form class="form-signup" action="Includes/signup.inc.php" method="post">
            <?php

            //If username is empty
            if (!empty($_GET["uid"])) {
              echo '<input type="text" name="username" placeholder="Username" value="'.$_GET["uid"].'">';
            }
            else {
              echo '<input type="text" name="username" placeholder="Username">';
            }

            //if email is emty
            if (!empty($_GET["mail"])) {
              echo '<input type="text" name="email" placeholder="E-mail" value="'.$_GET["mail"].'">';
            }
            else {
              echo '<input type="text" name="email" placeholder="E-mail">';
            }
            ?>
            <input type="password" name="password" placeholder="Password">
            <input type="password" name="password-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
