<?php include_once('navbar.php'); ?>
<?php include_once('sidebar.php'); ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5>Input Produk</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="proses_produk.php">
                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">Id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="id" name="id" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kode" class="col-4 col-form-label">Kode</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="kode" name="kode" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Produk</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="nama" name="nama" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_jual" class="col-4 col-form-label">Harga Jual</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="harga_jual" name="harga_jual" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="harga_beli" class="col-4 col-form-label">Harga Beli</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="harga_beli" name="harga_beli" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="stok" class="col-4 col-form-label">Stok</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="stok" name="stok" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="min_stok" class="col-4 col-form-label">Min Stok</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="min_stok" name="min_stok" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="deskripsi" class="col-4 col-form-label">Deskripsi</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="deskripsi" name="deskripsi" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="kategori_produk_id" class="col-4 col-form-label">Kategori Produk</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="kategori_produk_id" name="kategori_produk_id" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="form-group row">
                                        <div class="offset-4 col-8">
                                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                        </div>
                  </div>
              </div>
          </div>
        </div>
        </div>
    </main>
<?php include_once('footer.php'); ?>


