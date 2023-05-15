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
                        <div class="card-header"><h5>List Pesanan</h5></div>
                            <div class="card-body">
                                <table class="table mt-4">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Nama Pemesan</th>
                                            <th scope="col">Alamat Pemesan</th>
                                            <th scope="col">No Hp</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Jumlah Pesanan</th>
                                            <th scope="col">Deskripsi</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $data = $db->query("SELECT * FROM pesanan"); 
                                        foreach ($data as $d) :
                                        ?>
                                    <tr>
                                        <td><?= $d["id"] ?></td>                                        
                                        <td><?= $d["tanggal"] ?></td>                                        
                                        <td><?= $d["nama_pemesan"] ?></td>                                                                             
                                        <td><?= $d["alamat_pemesan"] ?></td>                                                                             
                                        <td><?= $d["no_hp"] ?></td>                                                                             
                                        <td><?= $d["email"] ?></td>                                        
                                        <td><?= $d["jumlah_pesanan"] ?></td>
                                        <td><?= $d["deskripsi"] ?></td>                                                                                                                   
                                        <td>
                                            <a href="delete_pesanan.php?id=<?= $d["id"] ?>" class="btn btn-danger">DELETE</a>
                                            <a href="form_update_pesanan.php?id=<?= $d["id"] ?>" class="btn btn-success">EDIT</a>
                                        </td>                                        
                                    </tr>
                                        <?php 
                                        endforeach;
                                        ?>                       
                                    </tbody>
                                </table>
                                <a href="form_pesanan.php" class="btn btn-warning mt-4">Input Baru</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include_once('footer.php'); ?>


