<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Edit Data Perikanan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?php echo base_url("admin/Overview") ?>">Home</a></li>
						<li class="breadcrumb-item active">DataTables / Edit</li>
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
        <input type="hidden" name="id" value="<?= $perikanan['nomor'] ?>">
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal Inputan" value="<?= $perikanan['tanggal'] ?>">
          <small class="form-text text-danger"><?= form_error('tanggal'); ?></small>
        </div>
           <div class="form-group">
          <label for="id">Nama Pasar</label>
          <select class="form-control bahan" type="text" name="id_pasar" placeholder="Nama Pasar" value="<?= $perikanan['pasar'] ?>">
            <option value="" selected=""></option>
            <?php foreach ($pasar as $key => $value):?>
            <option value="<?php echo $value['id_pasar'] ?>"><?php echo $value['nama_pasar'] ?></option>
            <?php endforeach ?>
          </select>
          <small class="form-text text-danger"><?= form_error('id_pasar'); ?></small>
        </div>
           <div class="form-group">
            <label for="nama_pedagang">Nama Pedagang</label>
            <select class="form-control bahan" type="text" name="id_pedagang" value="<?= $perikanan['nama_pedagang'] ?>">
              <option value="">Pilih</option>
               <?php foreach ($pedagang as $key => $pdg) : ?>
               <option value="<?php echo $pdg['id_pedagang'] ?>"><?php echo $pdg['nm_pedagang'] ?></option>
                <?php endforeach ?>     
                </select>
                <small class="form-text text-danger"><?= form_error('id_pedagang'); ?></small>
          </div>
           <div class="form-group">
          <label for="id">Jenis Ikan</label>
          <select type="text" class="form-control bahan" name="id_jenis" id="jenis_ikan" placeholder="Jenis Ikan..." value="<?= $perikanan['jenis_ikan'] ?>">
          <option value="" selected=""></option>
          <?php foreach ($jenis_ikan as $key => $value):?>
          <option value="<?php echo $value['id_jenis'] ?>"><?php echo $value['jenis_ikan'] ?></option>
        <?php endforeach ?>
            </select>
            <small class="form-text text-danger"><?= form_error('id_jenis'); ?></small>
        </div>
        <small class="form-text text-danger"><?= form_error('jenis_ikan'); ?></small>
            <div class="form-group">
            <label for="harga">Harga</label>
            <input type="text" class="form-control" name="harga" id="harga" placeholder="Harga" value="<?= $perikanan['harga'] ?>">
            <small class="form-text text-danger"><?= form_error('harga'); ?></small>
          </div>
          <div class="form-group">
            <label for="jumlah">Jumlah(Kg)</label>
            <input type="text" class="form-control" name="jumlah" id="jumlah" placeholder="Jumlah(Kg)" value="<?= $perikanan['jumlah'] ?>">
            <small class="form-text text-danger"><?= form_error('jumlah'); ?></small>
          </div>
          
          <div class="form-group">
            <label for="asal_ikan">Asal_ikan</label>
            <input type="text" class="form-control" name="asal_ikan" id="asal_ikan" placeholder="Asal_ikan" value="<?= $perikanan['asal_ikan'] ?>">
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
         		<a class="btn btn-info " href="<?= base_url('admin/Perikanan/') ?>">Kembali</a>
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