<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Rental</b>Tegal</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register sebagai pengguna baru</p>
    
        <form  method="POST" action="<?php echo base_url('register')?>">
            <div class="input-group mb-3">
                <input id="nama" type="text" class="form-control" placeholder="Nama" name="nama">
                <div class="input-group-append">
                    <div class="input-group-text">
                    <span class="fas fa-user"></span>
                    </div>
                </div>
            </div>
            <?php echo form_error('nama','<div class="text-small text-danger">','</div>') ?>
            <div class="input-group mb-3">
                <label for="username"></label>
                <input id="username" type="text" class="form-control" placeholder="Username" name="username">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
            </div>
            <?php echo form_error('username','<div class="text-small text-danger">','</div>') ?>
            <div class="input-group mb-3">
                <label for="alamat"></label>
                <input id="alamat" type="text" class="form-control" placeholder="alamat" name="alamat">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-home"></span>
                        </div>
                    </div>
            </div>
            <?php echo form_error('alamat','<div class="text-small text-danger">','</div>') ?>
            <div class="input-group mb-3">
                <label for="gender"></label>
                <select name="gender" class="form-control">
                    <option value="">--Pilih Jenis Kelamin--</option>
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <?php echo form_error('gender','<div class="text-small text-danger">','</div>') ?>

            <div class="input-group mb-3">
                <label for="no_telepon"></label>
                <input id="no_telepon" type="text" class="form-control" placeholder="No Telepon" name="no_telepon">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-phone"></span>
                    </div>
                </div>
            </div>
            <?php echo form_error('no_telepon','<div class="text-small text-danger">','</div>') ?>
            <div class="input-group mb-3">
                <label for="no_ktp"></label>
                <input id="no_ktp" type="text" class="form-control" placeholder="No KTP" name="no_ktp">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-id-card"></span>
                        </div>
                    </div>
            </div>
            <?php echo form_error('no_ktp','<div class="text-small text-danger">','</div>') ?>
            <div class="input-group mb-3">
                <label for="password"></label>
                <input id="password" type="password" class="form-control" placeholder="Password" name="password">
               
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-key"></span>
                        </div>
                    </div>
            </div>
            <?php echo form_error('password','<div class="text-small text-danger">','</div>') ?>
          <div class="col-8">
           
          </div>
          <!-- /.col -->
          <div class="col-"3>
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </form>


      <a href="login.html" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
