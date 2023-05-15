<?php

require_once "fungsi/dbkoneksi.php";

?>


<?php

$tgl = $_POST["input-tanggal"];
$nama = $_POST["input-nama"];
$alamat = $_POST["input-alamat"];
$nohp = $_POST["input-nomorhp"];
$email = $_POST["input-email"];
$jmlpsn = $_POST["input-jumlahpesanan"];
$deskripsi = $_POST["input-deskripsi"];


$_proses = $_POST["proses"];


$ar_data[] = $tgl; // ? 1
$ar_data[] = $nama; // ? 2
$ar_data[] = $alamat; // 3
$ar_data[] = $nohp;
$ar_data[] = $email;
$ar_data[] = $jmlpsn; // ? 7
$ar_data[] = $deskripsi; // ? 7



if ($_proses == "simpan") {
    // data baru
    $sql = "INSERT INTO pesanan(tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi)
    VALUES (?,?,?,?,?,?,?)";
} else if ($_proses == "Update") {
    $ar_data[] = $_POST['idedit']; // ? 8
    $sql = "UPDATE pesanan SET tanggal=?,nama_pelanggan=?,alamat_pesanan=?,no_hp=?,
    emailr=?,jumlah_pesanan=?,deskripsi_id=? WHERE id=?";
}
if (isset($sql)) {
    $st = $conn->prepare($sql);
    $st->execute($ar_data);
}

header('location:index.php');

?>