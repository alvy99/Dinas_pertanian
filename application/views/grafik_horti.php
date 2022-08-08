<!DOCTYPE html>
<html lang="en">
<head>
<title>Ketersediaan Bahan Pangan Sleman</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/dinas.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url() ?>assets/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets/styles/responsive.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="<?php echo base_url('assets/plugin/morris.css')?>">

</head>
<body>


<div class="super_container">

  <!-- Menu -->
  <div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
      <div class="menu_close_container"><div class="menu_close"></div></div>
      <div class="logo menu_logo">
          <div class="logo_container d-flex flex-row align-items-start justify-content-start">
            <div class="logo_image"><div><img src="<?php echo base_url() ?>assets/assets/images/dinas.jpeg" height="75" alt=""></div></div>
              <div class="logo_content">
                <div id="logo_text" class="logo_text logo_text_not_ie">Ketersediaan Bahan Pangan</h3></div>
                  <div class="logo_sub"><h4 style="text-align: left;">Kabupaten Sleman</h4></div>
                </div>
              </div>
            </a>  
          </div>
      <ul>
      <li class="menu_item"><a href="<?php echo base_url("home") ?>">Home</a></li>
        <li class="menu_item"><a href="<?php echo base_url("subsektor") ?>">Grafik</a></li>
      </ul>
    </div>
  </div>
  
  <!-- Home -->

  <div style="padding-top:450px">
    <header class="header">
      <div>
        <div class="header_top">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                  <div>
                      <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                        <div class="logo_image"><div><img src="<?php echo base_url() ?>assets/assets/images/dinas.jpeg" height="75" alt=""></div></div>
                        <div class="logo_content">
                        <div id="logo_text" class="logo_text logo_text_not_ie">Ketersediaan Bahan Pangan</h3></div>
                          <div id="logo_text" style="padding-top:10px" class="logo_text logo_text_not_ie"><h3>Kabupaten Sleman</h3></div>
                        </div>
                      </div>
                  </div>
                  <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header_nav" id="header_nav_pin">
          <div class="header_nav_inner">
            <div class="header_nav_container" style="background-color: #005B8F">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                      <nav class="main_nav">
                        <ul>
                          <li class="active"><a style="color:white" href="<?php echo base_url("home") ?>">Home</a></li>
                          <li><a style="color:white" href="<?php echo base_url("subsektor") ?>">Grafik</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
  <br>
  <div style="margin-left:60px">
    <form action="<?php echo site_url('laporan_grafik_horti/cari')?>" method="post" >
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
            <div class="col-sm-12" >
                <input type="submit" name="search" value="Tampilkan" class="btn btn-warning">
            </div>
    </form>
</header>
</div>

<div style="margin-left:500px">
       <label><h5>DATA INFORMASI GRAFIK </h5></label>
     </div>
    <div style="margin-left:80px">
    <label><font face="Arial" size="3">Nama Pasar     : <?php echo $hasil[0]['nama_pasar'] ?></font></label>
    <br>
    <label><font face="Arial" size="3">Tanggal : <?php echo date_indo($rs_search['tanggal_awal']) ?> - <?php echo date_indo($rs_search['tanggal_akhir']) ?></font></label>
    </div>
<br>

<div class="container">
    <div id="graph"></div>
  </div>
  <br>
  
 <!-- Footer -->
 <footer class="footer" style="background-color: #005B8F">
<footer class="footer">
    <div class="footer" style="background-color: #005B8F">
      <div class="container">  
        <div class="row">
          <div class="footer_col" style="padding-top:20px">
            <div class="footer_about">
                <div class="logo_container d-flex flex-row align-items-start justify-content-start" >
            <div class="logo_image"><div><img src="<?php echo base_url() ?>assets/assets/images/dinas.jpeg" height="75" style="margin-right:20px"></div></div>
              <div class="logo_content">
                <div id="logo_text" class="logo_text logo_text_not_ie"><p><h5 style="color: white">Ketersediaan Bahan Pangan Kabupaten Sleman</h5></p></div>
                  <div class="logo_sub"><h6 style="color: white">Jl.Dr.Radjimin,Sucen,Triharjo,Sleman, D.I.Yogyakarta</h6></div>
                </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="footer_extra" style="background-color: #005B8F">
      <div class="container" style="background-color: #005B8F">
         <div class="row">
          <div class="col">
                <div style="padding-top:100px">
                <h6 style="color:white; text-align: center;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Ketersediaan Bahan Pangan Kabupaten Sleman</h6>
              </div>
            </div>
          </div>
        </div>
        </div>
  </footer>
<script src="<?php echo base_url() ?>assets/assets/js/jquery-3.2.1.min.js"></script>
<!-- <script src="<?php echo base_url() ?>assets/assets/styles/bootstrap4/popper.js"></script> -->
<!-- <script src="<?php echo base_url() ?>assets/assets/styles/bootstrap4/bootstrap.min.js"></script> -->
<script src="<?php echo base_url() ?>assets/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url() ?>assets/assets/plugins/easing/easing.js"></script>
<script src="<?php echo base_url() ?>assets/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url() ?>assets/assets/js/custom.js"></script>
 <script src="<?php echo base_url() ?>assets/admin/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/myscript.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script src="<?php echo base_url('assets/plugin/raphael-min.js')?>"></script>
  <script src="<?php echo base_url('assets/plugin/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/plugin/morris.min.js')?>"></script>
  <script>

Morris.Bar({
  element: 'graph',
  data: <?php echo $graph;?>,
  xkey: 'nama_bahan',
  ykeys: ['rata_harga','stok'],
  labels: ['Rata Harga','Stok']
});
</script>
</body>
</html>

