<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Bahan Perikanan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("superadmin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">Menu Bahan</li>
						<li class="breadcrumb-item active">Edit Bahan Perkanan</li>
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
									<input type="hidden" name="id" value="<?= $jenis_ikan['id_jenis'] ?>">
									<div class="form-group">
										<label for="jenis_ikan">Jenis Ikan</label>
										<input type="text" class="form-control" name="jenis_ikan" id="jenis_ikan" placeholder="Jenis Ikan" value="<?= $jenis_ikan['jenis_ikan'] ?>">
										<small class="form-text text-danger"><?= form_error('jenis_ikan'); ?></small>
									</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-info " href="<?= base_url('superadmin/bahan_perikanan/') ?>">Kembali</a>
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