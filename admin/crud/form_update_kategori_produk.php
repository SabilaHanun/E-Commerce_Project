<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<?php include_once('database.php');

$id = $_GET['id'];
$data = $db->query("SELECT * FROM kategori_produk WHERE id='$id'");
$d = $data->fetch();

?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Edit Kategori Produk</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="update_kategori_produk.php">
                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">ID</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="id" name="id" type="text" class="form-control" value="<?= $d["id"]?>">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="nama" name="nama" type="text" class="form-control" value="<?= $d["nama"]?>">
                                        </div>
                                        </div>
                                    </div>
                                <div class="offset-4 col-8">
                                    <input type="hidden" name="id" value="<?= $d["id"]?>">
                                    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>

                                </form>
                            </div>
                        </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>


