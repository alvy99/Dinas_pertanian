<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Data Pertanian Pangan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("superadmin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">DataTables</li>
					</ol>
				</div>
			</div>
		</div>
		<div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash'); ?>"></div>
		<!-- <?php if ($this->session->flashdata()) : ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				Data Pertanian Pangan<strong> Berhasil</strong> <?= $this->session->flashdata('flash') ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php endif; ?> -->
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"></h3>
				<div style="float:left">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
						Tambah Data
					</button>
				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
			<div class="table-responsive">
				<table id="example2" class="table table-bordered table-hover table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th style="text-align:center">Tanggal</th>
							<th style="text-align:center">Pasar</th>
							<th style="text-align:center">Nama Bahan</th>
							<th style="text-align:center">Merk</th>
							<th style="text-align:center">Harga</th>
							<th style="text-align:center">Stok</th>
							<th style="text-align:center">Mdb</th>
                  			<th style="text-align:center">Mdd</th>
							<th style="text-align:center">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($pertanian_pangan as $key => $value) : ?>
							<tr>
								<td><?php echo $value['nomor'] ?></td>
								<td><?php echo $value['tanggal'] ?></td>
								<td><?php echo $value['nama_pasar'] ?></td>
								<td><?php echo $value['nama_bahan'] ?></td>
								<td><?php echo $value['v_k_m'] ?></td>
								<td><?php echo $value['harga'] ?></td>
								<td><?php echo $value['stok'] ?></td>
								<td><?php echo $value['mdb'] ?></td>
                        		<td><?php echo $value['mdd'] ?></td>
								<td class="text-right py-0 align-middle">
									<div class="btn-group btn-group-sm">
										<a href="<?php echo base_url("superadmin/perpang/edit_perpang/" . $value['nomor']) ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
										<a href="<?php echo base_url("superadmin/perpang/hapus_perpang/" . $value['nomor']) ?>" class="btn btn-danger tombol-hapus"><i class="fa fa-trash" aria-hidden="true"></i>
</a>
									</div>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
			<!-- /.card-body -->
		</div>
	</section>
	</div>
</div>
<!-- Modal form add -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Tambah Data Pertanian Pangan</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?php echo site_url() . 'superadmin/perpang/tambah_perpang' ?>" method="post">
				<div class="modal-body">
					<div class="form-group">
						<label for="tanggal">Tanggal</label>
						<input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo set_value('tanggal'); ?>">
						<small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
					</div>
					<div class="form-group">
					<label for="id">Pasar</label>
					<select class="form-control bahan" name="id_pasar" placeholder="Pasar...">
						<option value="" selected=""></option>
						<?php foreach ($pasar as $key => $value):?>
						<option value="<?php echo $value['id_pasar'] ?>"><?php echo $value['nama_pasar'] ?></option>
						<?php endforeach ?>
					</select>
						<small class="form-text text-danger"><?= form_error('id_pasar'); ?></small>
					</div>
					<div class="form-group">
					<label for="id_bahan">Nama Bahan</label>
					<select class="form-control bahan" name="id_bahan" placeholder="Nama bahan...">
						<option value="" selected=""></option>
						<?php foreach ($bahan_perpang as $key => $value):?>
						<option value="<?php echo $value['id_bahan'] ?>"><?php echo $value['nama_bahan'] ?></option>
						<?php endforeach ?>
                  	</select>
						<small class="form-text text-danger"><?= form_error('id_bahan'); ?></small>
					</div>
					<div class="form-group">
						<label for="v_k_m">Merk</label>
						<input type="text" class="form-control" name="v_k_m" id="v_k_m" placeholder="Merk" value="<?php echo set_value('v_k_m'); ?>">
						<small class="form-text text-danger"><?= form_error('v_k_m'); ?></small>
					</div>
					<div class="form-group">
						<label for="harga">Harga(Rp)</label>
						<input type="text" class="form-control" name="harga" id="harga" placeholder="harga" value="<?php echo set_value('harga'); ?>">
						<small class="form-text text-danger"><?= form_error('harga'); ?></small>
					</div>
					<div class="form-group">
						<label for="stok">Stok</label>
						<input type="text" class="form-control" name="stok" id="stok" placeholder="Stok" value="<?php echo set_value('stok'); ?>">
						<small class="form-text text-danger"><?= form_error('stok'); ?></small>
					</div>

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</div>
			</form>
		</div>
	</div>
</div>
