<?php 

include_once('navbar.php'); 
include_once('sidebar.php');
include_once('database.php');
 ?>
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4"></h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"><h5>List Produk</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Nama</th>
                                            <th>Harga Jual</th>
                                            <th>Harga Beli</th>
                                            <th>Stok</th>
                                            <th>Min Stok</th>
                                            <th>Deskripsi</th>
                                            <th>Kategori Produk</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $data = $db->query("SELECT * FROM produk");
                                        foreach ($data as $d) :
                                        ?>
                                    <tr>
                                        <td><?= $d["id"] ?></td>                                        
                                        <td><?= $d["kode"] ?></td>                                        
                                        <td><?= $d["nama"] ?></td>                                        
                                        <td><?= $d["harga_jual"] ?></td>
                                        <td><?= $d["harga_beli"] ?></td>                                        
                                        <td><?= $d["stok"] ?></td>                                        
                                        <td><?= $d["min_stok"] ?></td>
                                        <td><?= $d["deskripsi"] ?></td>                                        
                                        <td><?= $d["kategori_produk_id"] ?></td>                                        
                                        <td>
                                            <a href="delete_produk.php?id=<?= $d["id"] ?>" class="btn btn-danger">DELETE</a>
                                            <a href="form_update_produk.php?id=<?= $d["id"] ?>" class="btn btn-success">EDIT</a>
                                        </td>                                        
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_produk.php" class="btn btn-warning mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('footer.php'); ?>


