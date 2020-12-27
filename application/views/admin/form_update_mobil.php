<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Form Update Data Mobil</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->


        <div class="card">
            <div class="card-body">
                 <?php foreach ($mobil as $mb): ?>   
                
                    <form method="POST" action="<?php echo base_url('admin/data_mobil/update_mobil_aksi')?>" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Type Mobil</label>

                                <input type="hidden" name="id_mobil" value="<?php echo $mb->id_mobil ?>">

                                <select name="kode_type" class="form-control" >
                                    <option value="<?php echo $mb->kode_type ?>"><?php echo $mb->kode_type ?></option>

                                    <?php foreach ($tipe as $tp) : ?>
                                        <option value="<?php echo $tp->kode_type ?>"><?php echo $tp->nama_type?></option>
                                    <?php endforeach; ?>
                                </select>
                                <?php echo form_error('kode_type','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Merk</label>
                                <input type="text" name="merk" class="form-control" value="<?= $mb->merk ?>">
                           
                                <?php echo form_error('merk','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">No Plat</label>
                                <input type="text" name="no_plat" class="form-control" value="<?= $mb->no_plat?>">
                            
                            <?php echo form_error('no_plat','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            <div class="form-group">
                                <label for="">Warna</label>
                                <input type="text" name="warna" class="form-control" value="<?= $mb->warna?>">
                            
                            <?php echo form_error('warna','<div class="text-small text-danger">','</div>') ?>
                            </div>
                        </div>   
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Tahun</label>
                                <input type="text" name="tahun" class="form-control" value="<?= $mb->tahun?>">
                                <?php echo form_error('tahun','<div class="text-small text-danger">','</div>') ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="">Status</label>
                                <select name="status" class="form-control">
                                   
                                   <option <?php if($mb->status == "1"){echo "selected='selected'";} echo $mb->status; ?> value="1" >Tersedia</option>
                                   <option <?php if($mb->status == "0"){echo "selected='selected'";} echo $mb->status; ?> value="0" >Tidak Tersedia</option>
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
            <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>