<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE-edge">
  <title>Laporan Perpang</title>
  <link rel="stylesheet" href="">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
  integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style>
    .line-title{
      border:0;
      border-style: inset;
      border-top: 1px solid #000;
      }
      #customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: gray;
  color: white;
}
</style>
</head>
<body>
<img src="assets/assets2/images/kop.png" style="position: absolute; width: 90px; height: auto;">
    <table style="width: 100%">
      <tr>
        <td align="center">
          <span style="line-height: 1.6; font-weight: bold;">
              <h5>PEMERINTAH KABUPATEN SLEMAN</h5> <p><h4>DINAS PERTANIAN PANGAN DAN PERIKANAN</h4><p><h6>Jalan dr.Rajmin, Sucen, Triharjo, Sleman, Yogyakarta, 55514</h6>
                <p><h6>Telepon (0274)865560, Faksmile (0274) 865560</h6>
              
      </span>
    </td>
    </tr>
    </table>
    <hr class="line-title">
    <p align="center">
    <label><h6>DATA INFORMASI HARGA </h6></label> <br>
    <div style="margin-left:50px">
    <label>Nama Pasar     : <?php echo $hasil[0]['nama_pasar'] ?></label>
    <br>
    <label>Tanggal : <?php echo date_indo($rs_search['tanggal_awal']) ?> - <?php echo date_indo($rs_search['tanggal_akhir']) ?></label>
    </div>
  <br>
<table style="width:400px" align="center"id="customers">
  <tr>
      <th width="1px">No</th>
      <th>Nama Bahan</th>
      <th>Harga Rata-Rata</th>
      <th>Stok</th>
  </tr>
  <?php $no = 1 ?>
  <?php foreach ($perpang as $key => $value) : ?>
			<tr>
        <td><?php echo $no ?></td>
				<td><?php echo $value['nama_bahan'] ?></td>
        <td><?php echo substr($value['rata_harga'],0,-5) ?></td>
        <td><?php echo $value['jml_stok'] ?></td>
        <?php $no++ ?>
    </tr>
  <?php endforeach ?>
</table>
<div class="text-right">
    <h6 style="padding-top:100px">an Kepala Dinas Pertanian, Pangan<br style="text-center"> dan Perikanan<br>Sekretaris Dinas</p>
    <h6 style="padding-top:105px">Rofiq Andriyanto, S.Hut. MT<br>NIP. 1968195 199603<br>GOL. Pembina, IV/a 
</body>
</html>
