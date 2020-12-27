<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0 text-dark">Data Mobil</h1>
				</div><!-- /.col -->
			</div><!-- /.row -->

			<a href="<?= base_url('admin/data_mobil/tambah_mobil') ?>" class="btn btn-primary mb-2">Tambah Data</a>
			<br>

			<!-- <div class="flash-data" data-flashdata= "<?= $this->session->flashdata('pesan'); ?>"></div> -->
			<?php echo $this->session->flashdata('pesan') ?>

			<table class="table table-hover table-striped table-border mt-3" id="table-data">
				<thead>
					<tr>
						<th>No</th>
						<th>Gambar</th>
						<th>Type</th>
						<th>Merk</th>
						<th>No. Plat</th>
						<th>Warna</th>
						<th>Tahun</th>
						<th>Status</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody id="tbody-data"></tbody>

			</table>
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
	<script>
		$(document).ready(function() {
			
			$.ajax({
				type: "GET",
				url: "<?php echo base_url() ?>admin/data_mobil/jsonGetAllData",
				async: true,
				dataType: 'json',
				success: function(data) {
					let html = '';
					for (i = 0; i < data.mobil.length; i++) {
						html += `
							<tr>
								<td>${i + 1}</td>
								<td>
									<img width="80px" src="<?= base_url() ?>/assets/upload/${data.mobil[i].gambar}" alt="">
								</td>
								<td>${data.mobil[i].kode_type}</td>
								<td>${data.mobil[i].merk}</td>
								<td>${data.mobil[i].no_plat}</td>
								<td>${data.mobil[i].warna}</td>
								<td>${data.mobil[i].tahun}</td>
								<td>
									${data.mobil[i].status == 0? "<span class='badge badge-danger'>Tidak Tersedia</span>" : "<span class='badge badge-success '>Tersedia</span>"}
								</td>
								<td>
									<a class="btn btn-sm btn-success" href="<?= base_url() ?>admin/data_mobil/detail_mobil/${data.mobil[i].id_mobil }" >
										<i class="fas fa-eye"></i></a>
									<a class="btn btn-sm btn-danger" href="<?= base_url() ?>admin/data_mobil/delete_mobil/${data.mobil[i].id_mobil }" >
										<i class="fas fa-trash"></i></a>
									<a class="btn btn-sm btn-primary" href="<?= base_url() ?>admin/data_mobil/update_mobil/${data.mobil[i].id_mobil }?> " >
											<i class="fas fa-edit"></i></a>
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