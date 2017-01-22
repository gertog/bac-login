<?PHP 
  if (isset($_SESSION['access'])||isset($_SESSION['active'])) {
    if ($_SESSION["access"]==="3"&&$_SESSION['active']==="1"){
        include 'config/db.php';
          $sql = "SELECT ID, email, name, username, department, access_level, active FROM user_tbl WHERE 1";

        if ($result=mysqli_query($connection,$sql))
          {
          // Fetch one and one row
            echo 
                "<table width=90%>
                <tr>
                    <th>Email</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Department</th>
                    <th>Access Level</th>
                    <th>Active</th>
                    <th></th>
                    <th></th>
                    </tr>";
          while ($row=mysqli_fetch_row($result))
          {
            echo 
                "<tr>
                <td>".$row[1]."</td>
                <td>".$row[2]."</td>
                <td>" . $row[3]."</td>
                <td>" . $row[4]."</td>
                <td>" . $row[5]."</td>
                <td>" . $row[6]. "</td>
                <td> <a href='index.php?page=delete&id=". $row[0]."'>Del</a></td>
                <td> <a href='index.php?page=edit&id=". $row[0]."'>Edit</a></td>
                </tr>";
            }
              echo "</table>";
          // Free result set
          mysqli_free_result($result);
        }


        mysqli_close($connection);
    }
  }else{
      echo"You do not have access to this page!!";
      header( "refresh:2;url=index.php?page=login" );
  }
        ?>
