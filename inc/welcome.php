Welcome to the BACC access page<br>

       <?PHP
              if (!isset($_SESSION['access'])) {
                  echo'      <a href="index.php?page=login">Login</a><br>
      <a href="index.php?page=signup" id="signup_menu">Signup </a>';
              }
              ?>

