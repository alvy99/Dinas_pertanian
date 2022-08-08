<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Nama Pasar</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("admin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">Nama Pasar</li>
						<li class="breadcrumb-item active">Edit Nama Pasar</li>
					</ol>
                </div>
            </div>
        <div>
    </div>  

        <div class="card-body">
			<!-- Main content -->
			<?php if (validation_errors()) : ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors(); ?>
					</div>
				<?php endif ?>
			<section class="content">
				<div class="row">
					<div class="col-12">
						<div class="card">
							<form action="" method="post">
								<div class="modal-body">
									<input type="hidden" name="id" value="<?= $pasar['id_pasar'] ?>">
									<div class="form-group">
										<label for="nama_pasar">Nama Pasar</label>
										<input type="text" class="form-control" name="nama_pasar" id="nama_pasar" placeholder="Nama Pasar" value="<?= $pasar['nama_pasar'] ?>">
										<small class="form-text text-danger"><?= form_error('nama_pasar'); ?></small>
									</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-info " href="<?= base_url('admin/nama_pasar/') ?>">Kembali</a>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							</form>

						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
</div>