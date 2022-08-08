<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Perikanan</h1>
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
    <!-- <?php if ($this->session->flashdata('flash')) : ?>
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        Data Perikanan<strong> Berhasil</strong> <?= $this->session->flashdata('flash') ?>
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
        <table  style="width:1400px" id="example2" class="table table-responsive table-bordered table-hover table-striped">
          <thead>
            <tr>
                  <th>No</th>
                  <th style="text-align:center">Tanggal</th>
                  <th style="text-align:center">Nama Pasar</th>
                  <th style="text-align:center">Nama Pedagang</th>
                  <th style="text-align:center">Jenis Ikan</th>
                  <th style="text-align:center">Harga(Rp/Kg)</th>
                  <th style="text-align:center">Jumlah(Kg)</th>
                  <th style="text-align:center">Asal Ikan</th>
                  <th style="text-align:center">Keterangan</th>
                  <th style="text-align:center">Mdb</th>
                  <th style="text-align:center">Mdd</th>
                  <th style="text-align:center">Aksi</th>

              </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($perikanan as $key => $value) : ?>
                      <tr>
                        <td><?php echo $value['nomor'] ?></td>
                        <td><?php echo $value['tanggal'] ?></td>
                        <td><?php echo $value['nama_pasar'] ?></td>
                        <td><?php echo $value['nm_pedagang'] ?></td>
                        <td><?php echo $value['jenis_ikan'] ?></td>
                        <td><?php echo $value['harga'] ?></td>
                        <td><?php echo $value['jumlah'] ?></td>
                        <td><?php echo $value['asal_ikan'] ?></td>
                        <td><?php echo $value['keterangan'] ?></td>
                        <td><?php echo $value['mdb'] ?></td>
                        <td><?php echo $value['mdd'] ?></td>
												<td class="text-right py-0 align-middle">
									<div class="btn-group btn-group-sm">
                        <a href="<?php echo base_url("superadmin/perikanan/edit_perikanan/" . $value['nomor']) ?>" class="btn btn-info"><i class="fas fa-edit"></i></a>
										<a href="<?php echo base_url("superadmin/perikanan/hapus_perikanan/" . $value['nomor']) ?>" class="btn btn-danger tombol-hapus"><i class="fas fa-trash"></i></a>
  												</td>
  											</tr>
  										<?php endforeach ?>
  									</tbody>
  								</table>
  							</div>
  							</div>
  						</div>
  					</div>
            </div>
  				</section>
  		</div>
  		<!-- Modal form add -->

  		<!-- Modal -->
  		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
  				<div class="modal-content">
  					<div class="modal-header">
  						<h5 class="modal-title" id="exampleModalLabel">Tambah Data Perikanan</h5>
  						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  							<span aria-hidden="true">&times;</span>
  						</button>
  					</div>
  					<form action="<?php echo site_url() . 'superadmin/perikanan/tambah_perikanan' ?>" method="post">
           <div class="modal-body">
          <div class="form-group">
            <label for="tanggal">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo set_value('tanggal'); ?>">
            <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
          </div>
           <div class="form-group">
            <label for="id">Nama Pasar</label>
            <select class="form-control bahan" name="id_pasar" placeholder="Nama Pasar...">
              <option value="" selected=""></option>
                  <?php foreach ($pasar as $key => $value):?>
                <option value="<?php echo $value['id_pasar'] ?>"><?php echo $value['nama_pasar'] ?></option>
                  <?php endforeach ?>
            </select>
            <small class="form-text text-danger"><?= form_error('id_pasar'); ?></small>
          </div>
          <div class="form-group">
            <label for="nama_pedagang">Nama_pedagang</label>
             <select name="id_pedagang" class="form-control">
                    <option value="">Pilih</option>
                <?php foreach ($pedagang as $key => $pdg) : ?>
                    <option value="<?php echo $pdg['id_pedagang'] ?>"><?php echo $pdg['nm_pedagang'] ?></option>
                <?php endforeach ?>     
                </select>
            <small class="form-text text-danger"><?= form_error('id_pedagang'); ?></small>
          </div>
            <div class="form-group">
            <label for="id">Jenis_ikan</label>
            <select class="form-control bahan" name="id_jenis" placeholder="Jenis Ikan...">
              <option value="" selected=""></option>
                  <?php foreach ($jenis_ikan as $key => $value):?>
                  <option value="<?php echo $value['id_jenis'] ?>"><?php echo $value['jenis_ikan'] ?></option>
                  <?php endforeach ?>
                </select>
            <small class="form-text text-danger"><?= form_error('id_jenis'); ?></small>
          </div>
            <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?php echo set_value('harga'); ?>">
            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah(Kg)</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah" value="<?php echo set_value('jumlah'); ?>">
            <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
          </div>
          <div class="form-group">
            <label for="asal_ikan">Asal_ikan</label>
            <input type="text" class="form-control" name="asal_ikan" id="asal_ikan" placeholder="Asal_ikan" value="<?php echo set_value('asal_ikan'); ?>">
            <small class="form-text text-danger"><?= form_error('asal_ikan'); ?></small>
          </div>
              <div class="form-group">
                  <label for="satuan">Keterangan</label>
                  <select class="form-control" id="keterangan" name="keterangan">
                  <option selected>Pilih Keterangan</option>
                  <option value="Besar">B</option>
                    <option value="Sedang">S</option>
                    <option value="Kecil">K</option>
                    <option value="Keranjang">Krj</option>
                  <option value="Ekor">Ekr</option>
                  <option value="Ptng">Ptng</option>
                </select>
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
    </section>
  </div>
