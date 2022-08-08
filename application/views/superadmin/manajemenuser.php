<div class="content-wrapper">

	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1><i class="nav-icon fas fa-user-plus">Manajemen Admin</i></h1>
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
    <!-- <?php if ($this->session->flashdata('flash')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Manajemen Admin<strong> Berhasil</strong> <?= $this->session->flashdata('flash') ?>
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
      <br>
        <div class="row">
            <div class="col-lg-12">
            <div class="card-body">
            <div class="table-responsive">
				<table id="example" class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th style="text-align:center">Username</th>
                            <th style="text-align:center">Email</th>             
                            <th style="text-align:center">Sektor</th>
                            <th style="text-align:center">Level</th>
                            <th style="text-align:center">Image</th>
                            <th style="text-align:center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($manajemenuser as $key => $value) : ?>
						<tr>
							<td><?php echo $value['id_admin'] ?></td>
							<td><?php echo $value['username'] ?></td>
							<td><?php echo $value['email'] ?></td>
              <td><?php echo $value['sektor'] ?></td>
              <td><?php echo $value['level'] ?></td>
              <td>
                <img src="<?php echo base_url(); ?>assets/foto/<?php echo $value['image']; ?>" width="50" >
              </td>
						<td>
							<a href="<?php echo base_url("superadmin/manajemenuser/edit_admin/" . $value['id_admin']) ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
							<a href="<?php echo base_url("superadmin/manajemenuser/hapus_admin/" . $value['id_admin']) ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
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
  						<h5 class="modal-title" id="exampleModalLabel">Tambah Data User</h5>
  						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  							<span aria-hidden="true">&times;</span>
  						</button>
  					</div>
            <?php echo form_open_multipart('superadmin/manajemenuser/tambah_admin') ?>
            <div class="modal-body">
            <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" id="username" placeholder="Username" value="<?php echo set_value('username'); ?>">
            <small class="form-text text-danger"><?= form_error('username'); ?></small>
          </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" id="email" placeholder="Email" value="<?php echo set_value('email'); ?>">
            <small class="form-text text-danger"><?= form_error('email'); ?></small>
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
            <small class="form-text text-danger"><?= form_error('password'); ?></small>
          </div>
            <div class="form-group">
            <label for="sektor">Sektor</label>
            <input type="text" class="form-control" name="sektor" id="sektor" placeholder="Sektor" value="<?php echo set_value('Sektor'); ?>">
            <small class="form-text text-danger"><?= form_error('sektor'); ?></small>
          </div>
            <div class="form-group">
            <label for="level">Level</label>
            <input type="text" class="form-control" name="level" id="level" placeholder="Level" value="<?php echo set_value('level'); ?>">
            <small class="form-text text-danger"><?= form_error('level'); ?></small>
          </div>
          <div class="form-group">
            <label for="level">Image</label>
            <input type="file" class="" name="image" value="<?php echo set_value('image'); ?>">
          </div>
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

        