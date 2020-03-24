<?php
  require "loginHeader.php";
?>

    <main>
      <div>
        <section class="section-default">

          <?php

          //if we don't have the session variables set in the website then the user is logged out

          if (!isset($_SESSION['id'])) {
            echo '<h3 class="login-status">You are logged out!</h3>';
          }
          //if we have the session variables set in the website then the user is logged in

          else if (isset($_SESSION['id'])) {
            echo '<h3 class="login-status">You are logged in!</h3>';
          }
          ?>
        </section>
      </div>
    </main>

<?php
  require "footer.php";
?>
