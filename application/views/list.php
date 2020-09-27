<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">


				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<h3>Daftar Calon Siswa Baru</h3>
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
											<?php echo substr($student->address, 0, 120) ?></td>
										<td>
											<?php echo $student->phone ?>
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
			<?php $this->load->view("_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("_partials/scrolltop.php") ?>

	<?php $this->load->view("_partials/js.php") ?>

</body>

</html>
