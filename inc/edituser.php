<?PHP
include '../config/db.php';
$name = mysqli_real_escape_string($connection,$_POST["name"]);
$department = mysqli_real_escape_string($connection,$_POST["department"]);
$username = mysqli_real_escape_string($connection,$_POST["username"]);
$email = mysqli_real_escape_string($connection, $_POST["email"]);
$password = mysqli_real_escape_string($connection,$_POST["password"]);
$id = mysqli_real_escape_string($connection,$_POST["id"]);
$access = mysqli_real_escape_string($connection,$_POST["access_level"]);
if (isset($_POST["active"])){
 $active = (bool)mysqli_real_escape_string($connection,$_POST["active"]);   
}else{
    $active = 0;
};

$sql="UPDATE user_tbl SET 
    email = '".$email."', 
    name = '".$name."', 
    username = '".$username."', 
    department = '".$department."', 
    access_level = '".$access."', 
    active = '".$active."', 
    password = '".$password."' where ID='".$id."'";
if ($connection->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

header( "refresh:3;url=../index.php?page=admin" );