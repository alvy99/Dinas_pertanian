<div class="content-wrapper"> 
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Peternakan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("superadmin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">DataTables</li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->

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
									<input type="hidden" name="id" value="<?= $peternakan['nomor'] ?>">
									<div class="form-group">
										<label for="tanggal">Tanggal</label>
										<input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Inputan" value="<?= $peternakan['tanggal'] ?>">
										<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
										</div>
									<div class="form-group">
									<label for="pasar">Pasar</label>
									<select class="form-control bahan" type="text" name="id_pasar" placeholder="Pasar" value="<?= $peternakan['pasar'] ?>">
										<option value="" selected=""></option>
										<?php foreach ($pasar as $key => $value):?>
										<option value="<?php echo $value['id_pasar'] ?>"><?php echo $value['nama_pasar'] ?></option>
										<?php endforeach ?>
									</select>
									<small class="form-text text-danger"><?= form_error('id_pasar'); ?></small>
								</div>
								<div class="form-group">
									<label for="nama_bahan">Nama Bahan</label>
									<select type="text" class="form-control bahan" name="id_bahan" id="nama_bahan" placeholder="Nama_bahan" value="<?= $peternakan['nama_bahan'] ?>">
									<option value="" selected=""></option>
									<?php foreach ($bahan_peternakan as $key => $value):?>
									<option value="<?php echo $value['id_bahan'] ?>"><?php echo $value['nama_bahan'] ?></option>
								<?php endforeach ?>
					        </select>
							<small class="form-text text-danger"><?= form_error('id_bahan'); ?></small>
								</div>
									<small class="form-text text-danger"><?= form_error('nama_bahan'); ?></small>
									<div class="form-group">
										<label for="harga">Harga</label>
										<input type="text" class="form-control" name="harga" id="harga" placeholder="harga" value="<?= $peternakan['harga'] ?>">
										<small class="form-text text-danger"><?= form_error('harga'); ?></small>
										</div>
									<div class="form-group">
										<label for="satuan">Satuan</label>
										<input type="text" class="form-control" name="satuan" id="satuan" placeholder="satuan" value="<?= $peternakan['satuan'] ?>">
										<small class="form-text text-danger"><?= form_error('satuan'); ?></small>
										</div>
									<div class="form-group">
										<label for="stok">Stok</label>
										<input type="text" class="form-control" name="stok" id="stok" placeholder="stok" value="<?= $peternakan['stok'] ?>">
										<small class="form-text text-danger"><?= form_error('stok'); ?></small>
										</div>
								</div>
								<div class="modal-footer">
									<a class="btn btn-info " href="<?= base_url('superadmin/Peternakan/') ?>">Kembali</a>
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
<!-- Modal form add -->
