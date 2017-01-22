<?PHP
include 'config/db.php';

if (isset($_SESSION['username']))
{
    $username=$_SESSION['username'];
}else{
    $username='';
}
if (isset($_SESSION['password']))
{
    $password=$_SESSION['password'];
}else{
    $password='';
}
if (isset($_SESSION['name']))
{
    $name=$_SESSION['name'];
}else{
    $name='User';
}





?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mediacom BACC Access</title>
    <meta charset="utf-8">
  
    <link rel="stylesheet" href="./css/custom.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <script src="js/reg.js"></script>
  </head>
  <body>

      <div class="container">
            <?PHP include 'inc/menu.php'; ?>
          
          <div class="main">
            <?PHP 
              $page = "";
              if ( isset( $_GET['page'] ) && !empty( $_GET['page'] ) ){
                  $page = "inc/".mysqli_real_escape_string($connection,$_GET['page']).".php";
               }else{
                 $page = "inc/welcome.php";
               }
              include $page; ?>
          </div>
      </div>
  </body>
</html>