<?php 
include_once("database.php");
$db->query("DELETE FROM produk WHERE id='$_GET[id]' ");
header("location: list_produk.php");

?>


