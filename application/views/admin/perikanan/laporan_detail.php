<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Laporan Perikanan</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/Overview") ?>">Home</a></li>
            <li class="breadcrumb-item active">Laporan</li>
            <li class="breadcrumb-item active">Laporan Perikanan</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="card">
			<div class="card-header">
    <br>
     <div style="margin-left:400px">
       <label><h5>DATA INFORMASI HARGA IKAN</h5></label>
     </div>
    <div style="margin-left:30px">
    <label><font face="Arial" size="3">Nama Pasar     : <?php echo $hasil[0]['nama_pasar'] ?></font></label>
    <br>
    <label><font face="Arial" size="3">Nama Pedagang  : <?php echo $hasil[0]['nm_pedagang'] ?></font></label>
    <br>
    <label><font face="Arial" size="3">Tanggal : <?php echo date_indo($rs_search['tanggal_awal']) ?> - <?php echo date_indo($rs_search['tanggal_akhir']) ?></font></label>
  <div style="float:right">
  <div class="dropdown">
			<button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
				<i class="fa fa-download" style="color:white">Export</i>
			</button>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
				<a class="dropdown-item" href="<?php echo base_url() ?>admin/perikanan/excel/<?php echo $rs_search['tanggal_awal']?>/<?php echo $rs_search['tanggal_akhir']?>/<?php echo $rs_search['id_pasar']?>/<?php echo $rs_search['id_pedagang']?>">EXCEL</a>
				<a class="dropdown-item" href="<?php echo base_url() ?>admin/perikanan/laporan_pdf/<?php echo $rs_search['tanggal_awal']?>/<?php echo $rs_search['tanggal_akhir']?>/<?php echo $rs_search['id_pasar']?>/<?php echo $rs_search['id_pedagang']?>">PDF</a>
			</div>
		</div>
            </div>
              </div>
      <!-- /.card-header -->
      <div class="card-body">
      <div class="table-responsive">
        <table id="example2" class="table table-bordered table-hover table-striped" >
          <thead>
            <tr>
				         <th width="1px">No</th>
                  <th style="text-align:center">Jenis Ikan</th>
                  <th style="text-align:center">Rata-Rata Harga Satuan(Rp/Kg)</th>
                  <th style="text-align:center">Jumlah Perminggu(Kg)</th>
                  <th style="text-align:center">Asal Ikan</th>
            </tr>
		</thead>

			<tbody>
      <?php $no = 1 ?>
				<?php foreach ($hasil as $key => $value) : ?>
			<tr>
        <td align="center"><?php echo $no ?></td>
				<td><?php echo $value['jenis_ikan'] ?></td>
        <td align="center"><?php echo substr($value['rata_harga'],0,-5) ?></td>
        <td align="center"><?php echo $value['jml_harga'] ?></td>
        <td><?php echo $value['asal_ikan'] ?></td>
        <?php $no++ ?>
  				</td>
  			</tr>
  			<?php endforeach ?>
            <!-- <tr style="font-weight: bold"> 
                <td colspan="2" style="text-align: center">Jumlah</td>
                <td><?php echo $rs_jumlah_harga['jumlah'] ?></td>
                <td colspan="5"></td>
            </tr>
            </td>
            <tr style="font-weight: bold">
                <td colspan="2" style="text-align: center">Rata-rata</td>
                <td><?php echo $rs_rata_rata ?></td>
                <td colspan="5"></td>
            </tr>  -->
  							</tbody>
  								</table>
  							</div>
  							</div>
  						</div>
  					</div>
  				</section>
  		</div>
