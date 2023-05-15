<!-- ----------PHP---------------- -->

<?php require "config.php"  ?>
<?php require "fungsi/dbkoneksi.php" ?>
<?php include_once "template/header.php" ?>

<!-- ----------PHP---------------- -->


<!-- -----------------Body---------------- -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PizzaParty</title>

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Java Bootsrtap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- font awesome -->
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">

</head>

<style>

  @import url('https://fonts.googleapis.com/css2?family=DM+Serif+Display&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&display=swap');

	.card-body{
		text-align: center ;
	}
	.card-footer{
		text-align: center ;
	}
  .card{
    margin: 0 0 0 22px; 
    text-align: center;
  }
  .card-body{
    padding: 20px
  }
  .pagination{
    justify-content: center;
  }
  h2{
    font-family: 'DM Serif Display', serif;
  }
  h5{
    font-weight: bold;
    font-family: 'Playfair Display', serif;
  }
  .product-desc{
    font-family: 'Playfair Display', serif;
  }
  .product-price{
    font-family: 'Noto Serif', serif;
  }
  p {
    font-family: 'Playfair Display', serif;
  }
  .tengah{
    text-align: center ;
  }
  .deskripsi{
    margin: 20px
  }
</style>

<!-- body -->

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/img/crsl1.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img  src="assets/img/crsl2.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="assets/img/crsl3.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-- -----------------Text---------------- -->

<div class="container-fluid">
    <div class="deskripsi">
        <div class="col-md-12">
            <h2>
              Welcome to Pizza Party,
            </h2>
            <hr>
            <p>
            the ultimate online destination for pizza lovers. Pizza Party is a website dedicated to bringing you a delightful, convenient, and delicious culinary experience right at your fingertips. When you visit the Pizza Party website, you will be greeted with an inviting and user-friendly interface. The intuitive design makes it easy for you to explore the wide range of pizza options available and make the perfect choice to suit your taste.
            <br>

            <br>The menu at Pizza Party offers a variety of flavors and tantalizing pizza choices. From classic Margherita with fresh tomato sauce and melted mozzarella cheese to unique combinations like BBQ Chicken with grilled chicken pieces and savory BBQ sauce, each pizza is crafted with delectable dough and fresh toppings, creating the perfect harmony to be enjoyed in the comfort of your own home.
            </p>
            <br>
            <h2 class="tengah">
              Our Best Menu!
            </h2>
        </div>
    </div>
</div>

<!-- -----------------Text---------------- -->

<!-- ----------------Body----------------- -->

<div class="container-fluid">
  <div class="row">
    <?php
    $sql = "SELECT * FROM `produk`;";
    $stmt = $conn->query($sql);


    while ($row = $stmt->fetch()) {
    ?>
      <div class="col-md-4 mt-4">
        <div class="card" style="width: 22rem;">
          <div>
            <h5 class="card-header">
            <?= $row['nama']?><br><i class="fas fa-star" style="color: #ffd43b;"></i><i class="fas fa-star" style="color: #ffd43b;"></i><i class="fas fa-star" style="color: #ffd43b;"></i><i class="fas fa-star" style="color: #ffd43b;"></i><i class="fas fa-star" style="color: #ffd43b;"></i>
            </h5>
          </div>
          <div class="card-body">
            <img src="assets/img/<?= $row['nama'] ?>.png" class="card-img-top" alt="...">
          </div>
          <div class="card-footer">
              <div class="product-desc"><?= $row['deskripsi']?></div>
              <div class="product-price"><h4><b>Rp <?= $row['harga_jual'] ?></b></h4></div>
              <br>
              <a href="view_produk.php?id=<?= $row['id'] ?>" button type="button" class="btn btn-outline-secondary">Add to Cart</button></a>
          </div>
        </div>
      </div>

    <?php
    }
    ?>


  </div>
</div>
<br>
<div class="container-fluid ">
	<div class="row">
        <div class="col-md-4">
        </div>
		<div class="col-md-4">
			<nav> 
				<ul class="pagination">
					<li class="page-item">
						<a class="page-link" href="#">Previous</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">1</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">2</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">3</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">4</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">5</a>
					</li>
					<li class="page-item">
						<a class="page-link" href="#">Next</a>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</div>

<!-- ----------------Body----------------- -->

<br>

<!-- ----------------Footer----------------- -->

<?php
include_once ROOT_DIR . "template/footer.php";
?>

<!-- ----------------Footer----------------- -->
