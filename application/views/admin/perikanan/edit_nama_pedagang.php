<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Nama Pedagang</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("admin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">Nama Pedagang</li>
						<li class="breadcrumb-item active">Edit Nama Pedagang</li>
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
									<input type="hidden" name="id" value="<?= $nama_pedagang['id_pedagang'] ?>">
									<div class="form-group">
										<label for="nm_pedagang">Nama Pedagang</label>
										<input type="text" class="form-control" name="nm_pedagang" id="nm_pedagang" placeholder="Nama Pedagang" value="<?= $nama_pedagang['nm_pedagang'] ?>">
										<small class="form-text text-danger"><?= form_error('nm_Pedagang'); ?></small>
									</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-info " href="<?= base_url('admin/nama_pedagang/') ?>">Kembali</a>
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