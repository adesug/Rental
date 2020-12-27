  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Costumer</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
        <a href="<?= base_url('admin/data_customer/tambah_customer') ?>" class="btn btn-primary mb-3">Tambah Data</a>
      </div><!-- /.container-fluid -->

      			<!-- <div class="flash-data" data-flashdata= "<?= $this->session->flashdata('pesan'); ?>"></div> -->
			<?php echo $this->session->flashdata('pesan') ?>
      <table class="table table-striped table-bordered " id="table-data">
        <br>
        <thead>
          <tr>
            <th width="20px">No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Alamat</th>
            <th>Gender</th>
            <th>No. Telepon</th>
            <th>No. KTP</th>
            <th>Password</th>
            	<th width="180px">Aksi</th>

          </tr>
        </thead>
        <tbody id="tbody-data"></tbody>

      </table>

    </div>
    <!-- /.content-header -->

    <script>

      $(document).ready(function (){
        $.ajax({
          type:"GET",
          url: "<?php echo base_url() ?>admin/data_customer/jsonGetAllData",
          async: true,
          dataType: 'json',
          success: function(data){
            let html = '';
            for (i =0; i < data.custumer.length; i++){
              html += `

              <tr>
                <td>${i + 1}</td>
                <td>${data.custumer[i].nama}</td>
                <td>${data.custumer[i].username}</td>
                <td>${data.custumer[i].alamat}</td>
                <td>${data.custumer[i].gender}</td>
                <td>${data.custumer[i].no_telepon}</td>
                <td>${data.custumer[i].no_ktp}</td>
                <td>${data.custumer[i].password}</td>
                <td>
                <a class="btn btn-sm btn-primary" href="<?= base_url()?>admin/data_customer/update_customer/${data.custumer[i].id_customer}"><i class="fas fa-edit"></i></a>
                <a class="btn btn-sm btn-danger" href="<?= base_url()?>admin/data_customer/delete_customer/${data.custumer[i].id_customer}"><i class="fas fa-trash"></i></a>
                </td>
              </tr>
              `
            }
            $('#tbody-data').html(html)
            $('#table-data').dataTable({})

          }
        })
      })
    </script>