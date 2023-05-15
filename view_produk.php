<!-- ----------PHP---------------- -->

<?php require "config.php"  ?>
<?php require "fungsi/dbkoneksi.php" ?>
<?php include_once "template/header.php" ?>

<!-- ----------PHP---------------- -->



<!-- ----------PHP---------------- -->

<?php
    $_id = $_GET['id'];
    $sql = "SELECT * FROM produk WHERE id=?";
    $st = $conn->prepare($sql);
    $st->execute([$_id]);
    $row = $st->fetch();
?> 

<!-- ----------PHP---------------- -->



<!---------------Body------------------->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Product</title>
</head>

<!---------------Style-------------------->


<style>

body {
  background-color: #fff;
}

.wrapper {
  height: 306px;
  width: 654px;
  margin: 50px auto;
  border-radius: 10px 10px 10px 10px;
  -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.15);
}

.product-img {
  float: left;
  height: 300px;
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
  background-color: #FFECB3;
  padding: 20px
}

.product-text {
  height: 300px;
  width: 327px;
}

.product-text h1 {
  margin: 0 0 0 0;
  padding-top: 0;
  font-size: 34px;
  color: #474747;
}

.product-text h1,
.product-price-btn p {
  font-family: 'Bentham', serif;
}

.product-price {
  font-family: 'Noto Serif', serif;
  font-weight: bold;
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
  margin: 0 0 0 0px;
  font-family: 'Playfair Display', serif;
  color: #8d8d8d;
  line-height: 1.7em;
  font-size: 15px;
  font-weight: lighter;
  overflow: hidden;
}

/* .product-price-btn {
  height: 103px;
  width: 290px;
  margin-top: -66px;
  position: relative;
} */

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
  margin: 0 0 0 0px;
  box-sizing: border-box;
  border: transparent;
  border-radius: 60px;
  font-family: 'Raleway', sans-serif;
  font-size: 14px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 0.2em;
  color: #000;
  background-color: #9cebd5;
  cursor: pointer;
  outline: none;
}

.product-desc{
  margin: 0 0 0 8px
}

.product-price-btn button:hover {
  background-color: #79b0a1;
}
  .button {
    float: right;
    display: inline-block;
    height: 50px;
    width: 176px;
    margin: 0 90px 0 0;
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
.card-img-top{
  weight: 100px;
}

</style>


<!----------------Style----------------------------->



<!----------------Body----------------------------->


<body>



<div class="wrapper">
    <div class="product-img">
    <img src="assets/img/<?= $row['nama'] ?>.png" class="card-img-top" alt="...">    </div>
        <div class="product-info">
          <div class="product-text">
            <h1 class="product-name"><?= $row['nama'] ?></h1>
            <br>
            <h4 class="product-price">Rp <?= $row['harga_jual'] ?></h4>
            <p class="product-desc"><?= $row['deskripsi']?></p>
          <div class="product-price-btn">
            <a class="button" href="form_pesanan.php?id=<?= $row['id'] ?>">buy now</a>
          </div>
        </div>
    </div>
  </div>


</body>

</html>


<!----------------Body----------------------------->



<!----------------Footer----------------------------->


<?php 
include_once  ROOT_DIR . 'template/footer.php';

?>


<!---------------Footer----------------------------->
