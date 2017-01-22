<?PHP
include 'config/db.php';
$id = $_GET['id'];
$sql = "DELETE from user_tbl where ID='".$id."'";
if ($connection->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $connection->error;
}
mysqli_close($connection);
header( "refresh:3;url=index.php?page=admin" );
?>