<?php 
include_once("database.php");

$db->query("UPDATE kategori_produk SET id='$_POST[id]', nama='$_POST[nama]'");
header("location: list_kategori_produk.php");



?>





