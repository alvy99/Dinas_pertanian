<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Hortikultura</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("superadmin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">DataTables / Edit</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-header">
				<h3 class="card-title">DataTable with minimal features & hover style</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<?php if (validation_errors()) : ?>
					<div class="alert alert-danger" role="alert">
						<?= validation_errors(); ?>
					</div>
				<?php endif ?>
				<form action="" method="post">
					<div class="modal-body">
				<input type="hidden" name="id" value="<?= $horti['nomor'] ?>">
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Inputan" value="<?= $horti['tanggal'] ?>">
					<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
				</div>
				<div class="form-group">
					<label for="pasar">Pasar</label>
					<select class="form-control bahan" type="text" name="id_pasar" placeholder="Pasar" value="<?= $horti['pasar'] ?>">
						<option value="" selected=""></option>
						<?php foreach ($pasar as $key => $value):?>
						<option value="<?php echo $value['id_pasar'] ?>"><?php echo $value['nama_pasar'] ?></option>
						<?php endforeach ?>
					</select>
					<small class="form-text text-danger"><?= form_error('id_pasar'); ?></small>
				</div>
				<div class="form-group">
					<label for="nama_bahan">Nama Bahan</label>
					<select type="text" class="form-control bahan" name="id_bahan" id="nama_bahan" placeholder="Nama_bahan" value="<?= $horti['nama_bahan'] ?>">
					<option value="" selected=""></option>
					<?php foreach ($bahan_horti as $key => $value):?>
					<option value="<?php echo $value['id_bahan'] ?>"><?php echo $value['nama_bahan'] ?></option>
				<?php endforeach ?>
            </select>
			<small class="form-text text-danger"><?= form_error('id_bahan'); ?></small>
				</div>
				<div class="form-group">
					<label for="harga">Harga</label>
					<input type="text" class="form-control" name="harga" id="harga" placeholder="harga" value="<?= $horti['harga'] ?>">
					<small class="form-text text-danger"><?= form_error('harga'); ?></small>
				</div>
				<div class="form-group">
					<label for="stok">Stok</label>
					<input type="text" class="form-control" name="stok" id="stok" placeholder="stok" value="<?= $horti['stok'] ?>">
					<small class="form-text text-danger"><?= form_error('stok'); ?></small>
				</div>

			</div>
			<div class="modal-footer">
				<a class="btn btn-info " href="<?= base_url('superadmin/Horti/') ?>">Kembali</a>
				<button type="submit" class="btn btn-primary">Simpan</button>
			</div>
		</form>
	</div>
</div>
