<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Form Input Data Mobil</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->

        <div class="card">
            <div class="card-body">
                <form method="POST" action="<?php echo base_url('admin/data_mobil/tambah_mobil_aksi')?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type Mobil</label>
                                <select name="kode_type" class="form-control" >
                                    <option value="">--Pilih Type Mobil--</option>
                                    <?php foreach($tipe as $tp) : ?>
                                        <option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Merk</label>
                                <input type="text" name="merk" class="form-control">
                            </div>
                            <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                            <div class="form-group">
                                <label for="">No Plat</label>
                                <input type="text" name="no_plat" class="form-control">
                            </div>
                            <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                            <div class="form-group">
                                <label for="">Warna</label>
                                <input type="text" name="warna" class="form-control">
                            </div>
                            <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" name="tahun" class="form-control">
                            </div>
                            <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                    <option value="">--Pilih Status--</option>
                                    <option value="1">Tersedia</option>
                                    <option value="0">Tidak Tersedia</option>
                                </select>
                            </div>
                            <?php echo form_error('status','<div class="text-small text-danger">','</div>') ?>
                            <div class="form-group">
                                <label for="">Gambar</label>
                                <input type="file" name="gambar" class="form-control">
                            </div>
                           

                            <button type="submit" class="btn btn-primary mt-4">Simpan</button>
                            <button type="reset" class="btn btn-danger mt-4">Reset</button>
                        </div> 

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>