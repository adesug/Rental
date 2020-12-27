s<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Detail Mobil</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <?php foreach ($detail as $dt) : ?>

            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-5">
                            <img  width="400px" src="<?= base_url().'assets/upload/'.$dt->gambar ?>">
                        </div>
                        <div class="col-md-7">
                            <table class="table">
                                <tr>
                                    <td>Type Mobil</td>
                                    <td>
                                    <?php 
                                    if ($dt->kode_type == "SDN"){
                                        echo "Sedan";

                                    }else if ($dt->kode_type == "HTB") {
                                        echo "Hatchback" ;
                                    }else if ($dt->kode_type == "MPV") {
                                        echo "Multi Purpose Vechile";
                                    } else {
                                        echo "<span class= ''text-danger'>Type mobil belum terdaftar</span>";

                                    }
                                    ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Merk </td>
                                    <td><?= $dt->merk  ?></td>
                                </tr>
                                <tr>
                                    <td>No Plat </td>
                                    <td><?= $dt->no_plat  ?></td>
                                </tr>
                                <tr>
                                    <td>Warna </td>
                                    <td><?= $dt->warna  ?></td>
                                </tr>
                                <tr>
                                    <td>tahun </td>
                                    <td><?= $dt->tahun  ?></td>
                                </tr>
                                <tr>
                                    <td>Status </td>
                                    <td><?php 
                                    if($dt->status == '0'){
                                        echo "<span class='badge badge-danger'>Tidak tersedia</span>";
                                    }else {
                                        echo "<span class='badge badge-danger'>Tersedia</span>";
                                    }
                                    
                                    ?></td>
                                </tr>
                            </table>
                            <a class="btn btn-sm btn-danger ml-4" href="<?= base_url('admin/data_mobil') ?>">Kembali</a>
                            <a class="btn btn-sm btn-primary" href="<?= base_url('admin/data_mobil/update_mobil/'.$dt->id_mobil) ?>">Update</a>
                        </div>
                    </div>
                </div>
            </div>
        
        <?php endforeach; ?>
        
        
    </div>
    <!-- /.content-header -->
   
    