   <?PHP 
include 'config/db.php';
  $sql = "SELECT ID, email, name, username, department, access_level, active, password FROM user_tbl WHERE ID=".$_GET["id"];

if ($result=mysqli_query($connection,$sql))
  {
    $row=mysqli_fetch_row($result);
      
      //Adjust if checked
    $yesno = (bool)$row[6];
    $checked = ($yesno) ? 'checked' : '';
    
   echo'
   <form action="inc/edituser.php" method="post">
        <div class="form-group">
        <input type="hidden" name="id" value ="'.$row[0].'">
        <input type="hidden" name="password" value ="'.$row[7].'">
    <label for="Name">Name:</label>
    <input type="text" class="form-control" name="name" value ="'.$row[2].'">
  </div>
        <div class="form-group">
    <label for="Department">Department:</label>
    <input type="text" class="form-control" name="department" value ="'.$row[4].'">
  </div>
        <div class="form-group">
    <label for="Username">Username:</label>
    <input type="text" class="form-control" name="username" value ="'.$row[3].'">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" name="email" value ="'. $row[1] .'">
  </div>
  <div class="form-group">
    <label for="access">Access Level:</label>
    <input type="text" class="form-control" name="access_level" value ="'.$row[5].'">
  </div>
  <div class="form-group">
    <label for="active">Active:</label>
    <input type="checkbox" class="form-control" name="active" '.$checked.'>

  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>';
      
      
        // Free result set
  mysqli_free_result($result);
}


mysqli_close($connection);
?>
