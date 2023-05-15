<!----------------------------------------------------------------->

<?php

$protocol = (isset($_SERVER['HTTPS']))? 'https': 'http';
$host = $_SERVER['HTTP_HOST'];


define("ROOT_PATH", $protocol . "://". $host . '/utsphp');
define("ROOT_DIR", __DIR__ . '\\'); 

?>

<!------------------------------------------------------------------>

<?php 
 
$server = "localhost";
$user = "root";
$pass = "";
$database = "dbpizza";
 
$conn = mysqli_connect($server, $user, $pass, $database);
 
if (!$conn) {
    die("<script>alert('Gagal tersambung dengan database.')</script>");
}
 
?>


<!---------------------------------------------------------------->