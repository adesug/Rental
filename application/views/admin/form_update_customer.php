<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Form Update Data Cutomer</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="card">
            <div class="card-body">
                <?php foreach ($custumer as $cts): ?>

                <form method="POST" action="<?= base_url('admin/data_customer/update_customer_aksi')?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="hidden" name="id_customer" value="<?= $cts->id_customer ?>">
                                <input type="text" name="nama" class="form-control" value="<?= $cts->nama ?>">
                            </div>
                            <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="username" class="form-control" value="<?= $cts->username ?>">
                            </div>
                            <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
                            <div class="form-group">
                                <label for="">Alamat</label>
                                <input type="text" name="alamat" class="form-control" value="<?= $cts->alamat ?>">
                            </div>
                            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
                            <div class="form-group">
                                <label for="">Gender</label>
                                <select name="gender" class="form-control">
                                    <!-- <option value="">--Pilih Status--</option> -->
                                    <option <?php if($cts->gender == "Laki-laki"){echo "selected='selected'";} echo $cts->gender; ?> value="Laki-laki">Laki-laki</option>
                                    <option <?php if($cts->gender == "Perempuan"){echo "selected='selected'";} echo $cts->gender; ?> value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>
                           
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">No. Telepon</label>
                                <input type="text" name="no_telepon" class="form-control" value="<?= $cts->no_telepon?>">
                            </div>
                            <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
                           
                            <div class="form-group">
                                <label for="">No. KTP</label>
                               <input type="text" name="no_ktp" class="form-control" value="<?php echo $cts->no_ktp ?>">
                            </div>
                            <?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" value="<?php echo $cts->password ?>">
                            </div>
                            <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div> 

                    </div>
                </form>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>