<?PHP
include '../config/db.php';
$username = mysqli_real_escape_string($connection,$_POST["username"]);
$password = md5(mysqli_real_escape_string($connection,$_POST["password"]));

  $sql = "SELECT email, name, password, department, access_level, active, ID FROM user_tbl WHERE username='".$username."'";

if ($result=mysqli_query($connection,$sql))
  {

  while ($row=mysqli_fetch_row($result))
  {
    $email=$row[0];  
    $name=$row[1];
    $passcheck=$row[2];
    $department=$row[3];
    $access=$row[4];
    $active=$row[5];
    $id=$row[6];

      if($password==$passcheck){
          echo "Passed<br>";
          $_SESSION['name']=$name;
          $_SESSION['email']=$email;
          $_SESSION['password']=$passcheck;
          $_SESSION['department']=$department;
          $_SESSION['access']=$access;
          $_SESSION['active']=$active;
          
          header( "refresh:3;url=../index.php" );
      }else{
          echo "failed<br>";
          header( "refresh:3;url=../index.php?page=login" );
      }
      
      
      
    }
      

  // Free result set
  mysqli_free_result($result);
}


mysqli_close($connection);
?>
