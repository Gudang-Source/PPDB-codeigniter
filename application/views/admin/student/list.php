<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/students/add') ?>"><i class="fas fa-plus"></i> Tambah Calon Siswa Baru</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama</th>
										<th>Umur</th>
										<th>Jenis Kelamin</th>
										<th>Alamat</th>
										<th>No.Handphone</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($students as $student): ?>
									<tr>
										<td width="150">
											<?php echo $student->name ?>
										</td>
										<td>
											<?php echo $student->age ?>
										</td>
										<td>
											<?php 
												if($student -> gender == 'l'){
													echo "Laki-Laki";
												}else if($student -> gender == 'p'){
													echo "Perempuan";
												}else {
													echo "-";
												}
											?>
										</td>
										<td class="small">
											<?php echo substr($student->address, 0, 30) ?>
										</td>
										<td>
											<?php echo $student->phone ?>
										</td>
										<td width="250">
											<a href="<?php echo site_url('admin/students/edit/'.$student->student_id) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/students/delete/'.$student->student_id) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

	<script>
	function deleteConfirm(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
	</script>
</body>

</html>
