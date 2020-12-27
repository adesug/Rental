<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Type Mobil</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->

		<a href="<?= base_url('admin/data_type/tambah_type') ?>" class="btn btn-primary btn-sm mb-3">Tambah Type</a>
    <?php echo $this->session->flashdata('pesan') ?>
    
		<table class="table table-bordered table-striped table-hover mt-3" id="table-data">
			<thead>
				<tr>
					<th width="20px">No</th>
					<th>Kode Type</th>
					<th>Nama Type</th>
					<th width="180px">Aksi</th>
				</tr>
			</thead>
			<tbody id="tbody-data"></tbody>
		</table>

		<!-- <a class="btn btn-sm btn-primary" href="<?= base_url('admin/data_type/update_type/' . $tp->id_type) ?>"><i class="fas fa-edit"></i></a>
                      <a class="btn btn-sm btn-danger" href="<?= base_url('admin/data_type/delete_type/' . $tp->id_type) ?>"><i class="fas fa-trash "></i></a> -->

	</div>
	<!-- /.content-header -->

	<script>
		$(document).ready(function () {
			$.ajax({
				type: "GET",
				url: "<?php echo base_url() ?>admin/data_type/jsonGetAllData",
				async: true,
				dataType: 'json',
				success: function (data) {
					let html = '';
					for (i = 0; i < data.tipe.length; i++) {
						html += `
              <tr>
                <td>${i + 1}</td>
                <td>${data.tipe[i].kode_type}</td>
                <td>${data.tipe[i].nama_type}</td>
                <td>
                <a class="btn btn-sm btn-primary" href="<?= base_url() ?>admin/data_type/update_type/${data.tipe[i].id_type}"><i class="fas fa-edit"></i></a>
                      <a class="btn btn-sm btn-danger" href="<?= base_url() ?>admin/data_type/delete_type/${data.tipe[i].id_type}"><i class="fas fa-trash "></i></a>
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
