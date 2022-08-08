<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><i class="nav-icon fas fa">Menu Bahan Hortikultura</i></h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("admin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">Bahan HOrtikultura</li>
					</ol>
                </div>
            </div>
        <div>
    </div>
    <div class="flash-data" data-flashdata="<?=$this->session->flashdata('flash'); ?>"></div>
    <!-- <?php if ($this->session->flashdata('flash')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Bahan Hortikultura<strong> Berhasil</strong> <?= $this->session->flashdata('flash') ?>
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
            <table style="width:348px" id="example2" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th style="text-align:center">Nama Bahan</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($bahan_horti as $key => $value) : ?>
						<tr>
							<td style="text-align:center"><?php echo $value['id_bahan'] ?></td>
							<td><?php echo $value['nama_bahan'] ?></td>
						<td>
              <a href="<?php echo base_url("admin/bahan_horti/edit_bahan/" . $value['id_bahan']) ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
							<a href="<?php echo site_url("admin/bahan_horti/hapus_bahan/" . $value['id_bahan']) ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
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
            <?php echo form_open_multipart('admin/bahan_horti/tambah_bahan') ?>
            <div class="modal-body">
            <div class="form-group">
            <label for="nama_bahan">Nama Bahan</label>
            <input type="text" class="form-control" name="nama_bahan" id="nama_bahan" placeholder="Nama Bahan" value="<?php echo set_value('nama_bahan'); ?>">
            <small class="form-text text-danger"><?= form_error('nama_bahan'); ?></small>
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

        