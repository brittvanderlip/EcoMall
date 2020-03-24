<?php
  session_start();
  require "dbh.inc.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Shop</title>
    <!--CSS Stylesheet-->
    <link rel="stylesheet" type="text/css" href="shop.css" />

    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!--Font Awesome-->
    <script src="https://kit.fontawesome.com/dfd3ed979b.js" crossorigin="anonymous"></script>
    <!--Javascript-->
    <script src="ecoMall.js" type="application/javascript"></script>
  </head>
  <body>
      <div class="container">
        <h1>Eco Mall</h1>

        <?php
        //If user is not logged in, they cannot access the shop
        if (!isset($_SESSION['id'])) {
          echo '<h3>Login to access shop</h3>
                <a href="loginHeader.php">Login Now</a>';
        }
        //If user is logged in, they can access the shop
        else if (isset($_SESSION['id'])) {
          echo '<div class="nav">
            <nav>
              <table align = "center">
                <tr>
                  <td><a href="loginHeader.php">Login/SignUp</a></td>
                  <td><a href="index.html">About</a></td>
                  <td><a href="shop.html">SHOP!</a></td>
                  <td><a href="contact.html">Contact Us</a></td>
                  <td><a href="cart.html">Shopping Bag</a></td>
                </tr>
              </table>
            </nav>
            <form action="logout.inc.php" method="post">
              <button type="submit" name="login-submit">Logout</button>
            </form>
          </div>

      <div class="container">
        <div id="box1">
          <h3>Boxed Water</h3>
          <img id="boxedWater img" src="boxed-water.jpg" alt="Water Bottle">
          <p>$5.00</p>
        </div>
        <div id="box2">
          <h3>Wooden Cutlery</h3>
          <img id="woodenCutlery img"src="wooden-cutlery.jpg" alt="Wooden Cutlery">
          <p>$15.00</p>

        </div>
        <div id="box3">
          <h3>Reuseable Coffee Capsules</h3>
          <img id="reuseablePods img" src="reuseable-pods.jpg" alt="Reuseable Coffee Capsules">
          <p>$16.00</p>

        </div>
        <div id="box4">
          <h3>Eco Soap</h3>
          <img id="soap img"src="soap.jpg" alt="Eco Soap">
          <p>$8.00</p>

        </div>
        <div id="boxdrag">
          <i class="fas fa-cart-arrow-down fa-6x"></i>
          <h4>Drag Below</h4>
        </div>
        <div id="box5">
          <h3>Drop Here</h3>
        </div>
        </div>';
        }
        ?>
    </div>
  </body>
</html>
