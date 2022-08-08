<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><i class="nav-icon fas fa">Menu Jenis Ikan</i></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("superadmin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">Bahan Perikanan</li>
					</ol>
                </div>
            </div>
        <div>
    </div>
    <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash'); ?>"></div>
    <!-- <?php if ($this->session->flashdata('flash')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Bahan Perikanan<strong> Berhasil</strong> <?= $this->session->flashdata('flash') ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <?php endif; ?> -->
    <div class="card">
			<div class="card-header">
        <h3 class="card-title"></h3>
        <div style="float:right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
            Tambah Data
          </button>
        </div>
      </div>
        <div class="row">
            <div class="col-lg-5">
            <div class="card-body">
				<table style="width:355px" id="example2" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th style="text-align:center">Jenis Ikan</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($jenis_ikan as $key => $value) : ?>
						<tr>
							<td style="text-align:center"><?php echo $value['id_jenis'] ?></td>
							<td><?php echo $value['jenis_ikan'] ?></td>
						<td>
              <a href="<?php echo base_url("superadmin/bahan_perikanan/edit_bahan/" . $value['id_jenis']) ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
							<a href="<?php echo site_url("superadmin/bahan_perikanan/hapus_bahan/" . $value['id_jenis']) ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
							</td>
						</tr>
                <?php endforeach ?>
					</tbody>
                </table>
            </div>
		</div>
	</div>
</div>
    </section>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
  				<div class="modal-content">
  					<div class="modal-header">
  						<h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
  						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  							<span aria-hidden="true">&times;</span>
  						</button>
  					</div>
            <?php echo form_open_multipart('superadmin/bahan_perikanan/tambah_bahan') ?>
            <div class="modal-body">
            <div class="form-group">
            <label for="jenis_ikan">Jenis Ikan</label>
            <input type="text" class="form-control" name="jenis_ikan" id="jenis_ikan" placeholder="jenis_ikan" value="<?php echo set_value('jenis_ikan'); ?>">
            <small class="form-text text-danger"><?= form_error('jenis_ikan'); ?></small>
          </div>
  						<div class="modal-footer">
  							<button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
  						</div>
  					<?php echo form_close() ?>
  				</div>
  			</div>
  		</div>
  	</section>
  </div>

        