<?PHP
   ob_start();
if (!isset($_SESSION)){
   session_start();
}

    
$host = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'bacc';
    
$connection = mysqli_connect($host, $user, $pass, $db_name);

if(!$connection){
    die("Connection to DB failed. " . mysqli_error($conenction));
}
?>
