<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Form Type Mobil</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      
        <form action="<?= base_url('admin/data_type/tambah_type_aksi') ?>" method="POST">
            <div class="form-group">
                <label for="">Kode Type</label>
                <input type="text" name="kode_type" class="form-control">
                <?= form_error('kode_type', '<div class="text-small text-danger">','</div>')?>
                 

            </div>
            <div class="form-group">
                <label for="">Nama Type</label>
                <input type="text" name="nama_type" class="form-control">
                <?= form_error('nama_type', '<div class="text-small text-danger">','</div>')?>
                 

            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Reset</button>
        </form>

    </div>
    <!-- /.content-header -->
