<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Laporan Hortikultura</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Overview") ?>">Home</a></li>
            <li class="breadcrumb-item active">Laporan</li>
            <li class="breadcrumb-item active">Laporan Hortikultura</li>
          </ol>
        </div>
      </div>
    </div>
    <br>
    <form action="<?php echo site_url('admin/laporanhorti/cari')?>" method="post" >
      <div class="col-md-12 row">
        <div class="col-md-3">
          <label>Tanggal Awal</label>
            <div class="form-group">
                <input type="date" name="tanggal_awal" id="" class="form-control" placeholder="Cari Data" >
            </div>
        </div>
        <div class="col-md-3">
          <label>Tanggal Akhir</label>
            <div class="form-group">
                <input type="date" name="tanggal_akhir" id="" class="form-control" placeholder="Cari Data" >
            </div>
        </div>
        <div class="col-sm-3">
            <div class="form-group">
            <label>Nama Pasar</label>
            <select name="id_pasar" class="form-control">
                    <option value="">Pilih</option>
                <?php foreach ($nama_pasar as $key => $pasar) : ?>
                    <option value="<?php echo $pasar['id_pasar'] ?>"><?php echo $pasar['nama_pasar'] ?></option>
                <?php endforeach ?>        
                </select>
            </div>
        </div>
           
        <!-- <div class="col-sm-3">
            <div class="form-group">
            <label>Jenis Ikan</label>
            <select name="cariberdasarkan" class="form-control">
                    <option value="">Pilih</option>
                <?php foreach ($bahan as $key => $value):?>
                  <option value="<?php echo $value['nama_bahan'] ?>"><?php echo $value['nama_bahan'] ?></option>
                  <?php endforeach ?>
                </select>
            </div>
        </div> -->
        <div class="userdata-data" data-userdata="<?= $this->session->flashdata('userdata');?>"></div>
            <div class="col-sm-10" >
                <input type="submit" name="search" value="Tampilkan" class="btn btn-warning">
            </div>
        </div>
    </form>
</section>
</div>

      <!-- /.card-header -->

