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
                        <div class="card-header"><h5>List Kategori Produk</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID</th>
                                            <th scope="col">Nama</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $data = $db->query("SELECT * FROM kategori_produk");
                                        foreach ($data as $d) :
                                        ?>
                                    <tr>
                                        <td><?= $d["id"] ?></td>                                                                               
                                        <td><?= $d["nama"] ?></td>                                                                                                      
                                        <td>
                                            <a href="delete_kategori_produk.php?id=<?= $d["id"] ?>" class="btn btn-danger">HAPUS</a>
                                            <a href="form_update_kategori_produk.php?id=<?= $d["id"] ?>" class="btn btn-success">EDIT</a>
                                        </td>                                        
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_kategori_produk.php" class="btn btn-warning mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('footer.php'); ?>


