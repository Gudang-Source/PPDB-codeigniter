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

				<?php //$this->load->view("admin/_partials/breadcrumb.php") 
				?>
				<div class="col">
					<div style="display:flex;align-items:center;justify-content:center;margin-top:20px;">
						<img src="../assets/img/unas2.png" />
					</div>
					<div style="display:flex;align-items:center;justify-content:center;">
						<p class="h3">Penerimaan Peserta Didik Baru (PPDB) UNAS</p>
					</div>
				</div>
				<div class="col">
					<p class="lead">
						Situs ini dipersiapkan sebagai pengganti pusat informasi dan pengolahan seleksi data siswa peserta PSB Universitas Nasional Periode 2020 / 2021 secara online real time process untuk pelaksanaan PSB Online.
					</p>
					</p>
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

</body>

</html>