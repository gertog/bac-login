logout page
<?PHP 
session_unset(); 
session_destroy();
header( "refresh:1;url=index.php" );
?>