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
                <h5>Input Pesanan</h5>
              </div>
              <div class="card-body">
                  <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12 mt-4">
                                <form method="POST" action="proses_pesanan.php">
                                    <div class="form-group row">
                                        <label for="id" class="col-4 col-form-label">Id</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                        <input id="id" name="id" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="tanggal" class="col-4 col-form-label">Tanggal</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                        <input id="tanggal" name="tanggal" type="date" class="form-control">
                                        </div>
                                    </div>
                                    </div> <div class="form-group row">
                                        <label for="nama_pemesan" class="col-4 col-form-label">Nama</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                        <input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    </div> <div class="form-group row">
                                        <label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                        <input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="no_hp" class="col-4 col-form-label">No. Hp</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="no_hp" name="no_hp" type="text" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="email" class="col-4 col-form-label">Email</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="email" name="email" type="email" class="form-control">
                                        </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="jumlah_pesanan" name="jumlah_pesanan" type="text" class="form-control">
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
                                        <label for="produk_id" class="col-4 col-form-label">Produk ID</label> 
                                        <div class="col-8">
                                        <div class="input-group">
                                            <input id="produk_id" name="produk_id" type="text" class="form-control">
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


