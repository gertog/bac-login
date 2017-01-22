<?PHP
include '../config/db.php';
$name = mysqli_real_escape_string($connection,$_POST["name"]);
$department = mysqli_real_escape_string($connection,$_POST["department"]);
$username = mysqli_real_escape_string($connection,$_POST["username"]);
$email = mysqli_real_escape_string($connection, $_POST["email"]);
$password = md5(mysqli_real_escape_string($connection,$_POST["pwd"]));
    
    
$sql = "INSERT INTO user_tbl (email, name, username, department, password)
VALUES ('$email', '$name', '$username', '$department', '$password')";

if ($connection->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}

mysqli_close($connection);

header( "refresh:3;url=../index.php?page=admin" );
?>