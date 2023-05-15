<?php 
include_once("database.php");
$db->query("DELETE FROM kategori_produk WHERE id='$_GET[id]' ");
header("location: list_kategori_produk.php");

?>


