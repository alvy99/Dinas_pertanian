<div class="content-wrapper">
 
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><i class="nav-icon fas fa-user-edit">Edit Manajemen Admin</i></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("superadmin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">Manajemen Admin</li>
					</ol>
                </div>
            </div>
        <div>
    </div>  
	<div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('gagal')) : ?>
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        Data Manajemen Admin <?= $this->session->flashdata('gagal') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?>

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
							<?php echo form_open_multipart('superadmin/Manajemenuser/updateDataAdmin') ?>
								<div class="modal-body">
									<input type="hidden" name="id_admin" value="<?= $admin['id_admin'] ?>">
									<div class="form-group">
										<label for="username">Username</label>
										<input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?= $admin['username'] ?>">
										<small class="form-text text-danger"><?= form_error('username'); ?></small>
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?= $admin['email'] ?>">
										<small class="form-text text-danger"><?= form_error('email'); ?></small>
									</div>
									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="password" value="<?= $admin['password'] ?>">
										<small class="form-text text-danger"><?= form_error('password'); ?></small>
									</div>

									<div class="form-group">
										<label for="sektor">Sektor</label>
										<input type="text" class="form-control" name="sektor" id="sektor" placeholder="sektor" value="<?= $admin['sektor'] ?>">
										<small class="form-text text-danger"><?= form_error('sektor'); ?></small>
									</div>
						
									<div class="form-group">
										<label for="level">Level</label>
										<input type="text" class="form-control" name="level" id="level" placeholder="level" value="<?= $admin['level'] ?>">
										<small class="form-text text-danger"><?= form_error('level'); ?></small>
									</div>
									<div class="form-group">
										<label for="image">Image</label>
										<input type="file" class="" name="image" id="level" placeholder="image">
									</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-info " href="<?= base_url('superadmin/Manajemenuser/') ?>">Kembali</a>
									<button type="submit" class="btn btn-primary">Simpan</button>
								</div>
							<?php echo form_close() ?>

						</div>
					</div>
				</div>
			</section>
		</div>
	</section>
</div>