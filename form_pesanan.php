<!-- ----------PHP---------------- -->

<?php require "config.php"  ?>
<?php require "fungsi/dbkoneksi.php" ?>
<?php include_once "template/header.php" ?>


<!-------------------------------------------->

<?php

if (!(isset($_GET['id']))) {
    echo "lol";
    if (empty($_GET['id'])) {
        header("location:index.php; ");
    }
}

?>

<!-------------------------------------------->

<?php
$_id = $_GET['id'];
$sql = "SELECT * FROM produk WHERE id=?";
$st = $conn->prepare($sql);
$st->execute([$_id]);
$row = $st->fetch();
?>

<!-- ----------PHP---------------- -->


<!-------------Style------------------->

<style>

    .wrapper {
        height: 306px;
        width: 654px;
        margin: 50px auto;
        border-radius: 7px 7px 7px 7px;
        -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
    }

    .product-img {
        float: left;
        height: 420px;
        width: 327px;
    }

    .product-img img {
        border-radius: 7px 0 0 7px;
    }

    .product-info {
        float: left;
        height: 306px;
        width: 327px;
        border-radius: 0 7px 10px 7px;
        background-color: #ffffff;
    }

    .product-text {
        height: 300px;
        width: 327px;
    }

    .product-text h1 {
        margin: 0 0 0 45px;
        padding-top: 15px;
        font-size: 34px;
        color: #474747;
    }

    .product-text h1,
    .product-price-btn p {
        font-family: 'Bentham', serif;
    }

    .product-text h2 {
        margin: 0 0 47px 50px;
        font-size: 13px;
        font-family: 'Raleway', sans-serif;
        font-weight: 400;
        text-transform: uppercase;
        color: #d2d2d2;
        letter-spacing: 0.2em;
    }

    .product-text p {
        height: 125px;
        margin: 0 0 0 38px;
        font-family: 'Playfair Display', serif;
        color: #8d8d8d;
        line-height: 1.7em;
        font-size: 15px;
        font-weight: lighter;
        overflow: hidden;
    }

    .product-price-btn {
        height: 103px;
        width: 290px;
        margin-top: -66px;
        position: relative;
    }

    .product-price-btn p {
        display: inline-block;
        position: absolute;
        top: -13px;
        height: 50px;
        font-family: 'Trocchi', serif;
        margin: 0 0 0 38px;
        font-size: 28px;
        font-weight: lighter;
        color: #474747;
    }

    span {
        display: inline-block;
        height: 50px;
        font-family: 'Suranna', serif;
        font-size: 34px;
    }

    .product-price-btn button {
        float: right;
        display: inline-block;
        height: 50px;
        width: 176px;
        margin: 0 40px 0 16px;
        box-sizing: border-box;
        border: transparent;
        border-radius: 60px;
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: #ffffff;
        background-color: #9cebd5;
        cursor: pointer;
        outline: none;
    }

    .product-price-btn button:hover {
        background-color: #79b0a1;
    }

    .button {
        float: right;
        display: inline-block;
        height: 50px;
        width: 500px;
        margin: 0 40px 0 16px;
        box-sizing: border-box;
        border: transparent;
        border-radius: 60px;
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        font-weight: 500;
        text-transform: uppercase;
        letter-spacing: 0.2em;
        color: #ffff;
        background-color: #9cebd5;
        cursor: pointer;
        outline: none;
        line-height: 3.6;
        text-align: center;
    }
</style>

<!---------------Style---------------------->



<!-----------Form Pesanan----------------------->

<div class="container col-12 col-md-8 col-lg-6 col-xl- mb-5">
    <form method="post" action="proses.php">
        <div class="mb-3 mt-3 row">
            <label for="input-tanggal" class="col-sm-2 col-form-label"><b>Tanggal</b></label>
            <div class="col-sm-10">
                <input type="DATE" class="form-control" id="input-tanggal" name="input-tanggal">


            </div>
        </div>

        <div class="mb-3 row">
            <label for="input-nama" class="col-sm-2 col-form-label"><b>Nama</b></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input-nama" name="input-nama">


            </div>
        </div>

        <div class="mb-3 row">
            <label for="input-alamat" class="col-sm-2 col-form-label"><b>Alamat</b></label>
            <div class="col-sm-10">
                <textarea class="form-control" id="input-alamat" name="input-alamat"></textarea>
            </div>
        </div>

        <div class="mb-3 row">
            <label for="input-nomorhp" class="col-sm-2 col-form-label"><b>No.HP</b></label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="input-nomorhp" name="input-nomorhp">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="input-email" class="col-sm-2 col-form-label"><b>Email</b></label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input-email" name="input-email">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="input-jumlahpesanan" class="col-sm-2 col-form-label"><b>Jumlah Pesanan</b></label>
            <div class="col-sm-10">
                <input type="number" class="form-control" id="input-jumlahpesanan" name="input-jumlahpesanan">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="input-deskripsi" class="col-sm-2 col-form-label"><b>Deskripsi</b></label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" id="input-deskripsi" name="input-deskripsi"></textarea>
            </div>
        </div>

        <div class="mb-3 row mt4">
            <div class="col">
                <input type="submit" name="proses" value="simpan" class="button"></input>
            </div>
        </div>
    </form>
</div>

<!---------------Form Pesanan--------------------->



<!----------------Footer--------------------------->

<?php
include_once  ROOT_DIR . 'template/footer.php';

?>

<!----------------Footer--------------------------->
