<?php 
include_once("database.php");
$db->query("DELETE FROM pesanan WHERE id='$_GET[id]' ");
header("location: list_pesanan.php");

?>


