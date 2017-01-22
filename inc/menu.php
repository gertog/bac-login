
  <div class="header">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
          <?PHP echo "Welcome, ".$name;
          if (isset($_SESSION['access'])||isset($_SESSION['active'])) {
              echo '<a href="index.php?page=logout" id="logout_menu">Logout</a>';
          }
          ?>
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
           <a class="navbar-brand" href="index.php"><img src="images/logo_mediacom_main.gif" width="75px"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
              <?PHP
              if (isset($_SESSION['access'])||isset($_SESSION['active'])) {

                echo '<li><a href="index.php?page=view" id="view_menu">View</a></li>';
     
              }
              
              if (isset($_SESSION['access'])||isset($_SESSION['active'])) {

              if ($_SESSION["access"]==="3"&&$_SESSION['active']==="1"){
                echo"<li><a href='index.php?page=admin' id='admin_menu'>Admin</a></li>";
              }
              }
              ?>
          </ul>
        </div><!-- /.navbar-collapse -->
      
      <div>
          
     
      </div>
            </div><!-- /.container-fluid -->
        </nav>
</div>            
      