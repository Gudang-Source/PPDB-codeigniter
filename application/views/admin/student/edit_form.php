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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/students/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/student/edit") ?>" method="post"
							enctype="multipart/form-data" >

							<input type="hidden" name="id" value="<?php echo $student->student_id?>" />

							<div class="form-group">
								<label for="name">Nama*</label>
								<input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
								 type="text" name="name" placeholder="Nama Siswa" value="<?php echo $student->name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('name') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="age">Umur</label>
								<input class="form-control <?php echo form_error('age') ? 'is-invalid':'' ?>"
								 type="number" name="age" min="0" placeholder="Umur Siswa" value="<?php echo $student->age ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('age') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="gender">Jenis Kelamin*</label>
								<select class="form-control <?php echo form_error('gender') ? 'is-invalid':'' ?>"
								 name="gender" placeholder="Pilih Jenis Kelamin">
								 	<option <?php if($student->gender !== 'l' || $student->gender !=='p'){echo("selected");}?> disabled>Pilih Jenis Kelamin</option>
									<option <?php if($student->gender == 'l'){echo("selected");}?> value="l">Laki-Laki</option>
									<option <?php if($student->gender == 'p'){echo("selected");}?> value="p">Perempuan</option>
								</select>
								<div class="invalid-feedback">
									<?php echo form_error('gender') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Alamat*</label>
								<textarea class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>"
								 name="address" placeholder="Alamat Siswa"><?php echo $student->address ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('address') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">No.Handphone</label>
								<input class="form-control"
								 type="text" name="phone" placeholder="Masukan Nomer Handphone Siswa" value="<?php echo $student->phone ?>" />
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
