<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if (session_id() == '' || !isset($_SESSION)) {
	session_start();
}


//if (isset($_SESSION["username"])) {header ("location:index.php");}
?>

<!DOCTYPE>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ketersediaan Bahan Pangan Sleman</title>
	<!-- Tell the browser to be responsive to screen width -->
	<link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/dinas.png">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Tempusdominus Bbootstrap 4 -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<!-- iCheck -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/adminlte.min.css">
	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
	<!-- Daterange picker -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.css">
	<!-- summernote -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/summernote/summernote-bs4.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/selectize/selectize.bootstrap4.css">
	<!-- datatables -->
	
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
	<!-- Sweetalert -->
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

	<!-- Google Font: Source Sans Pro -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin2/style.css"> -->
</head>
<body class="hold-transition sidebar-mini layout-fixed text-sm">
	<div class="wrapper">
		<!-- Navbar -->
		<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background: linear-gradient(to right, rgba(75, 123, 211, 0.5), rgba(22, 215, 177, 0.3))">
			<!-- Left navbar links -->
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
				</li>
					<div class="row mb-2">
						<h4 class="m-0 text-dark"><b>WEB DINAS PERTANIAN PANGAN DAN PERIKANAN</b></h4>
							<ul class="float: right">
								<ul class="float:right">
								<ul class="float:right">
								<ul class="float:right">
								<ul class="float:right">
								<ul class="float:right">
								<ul class="float:right">
								<a href="<?php echo base_url() ?>home" class="btn btn-default"><i class="fa fa-desktop icon"></i>Preview
							<a href="<?php echo base_url() ?>auth/logout" type="button" class="btn btn-danger tombol-keluar" >Signout<i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</ul>
			</ul>
		</nav>
		<!-- /.navbar -->

		<!-- Main Sidebar Container -->
		<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #005B8F">
			<!-- Brand Logo -->
			<!--<a href="index3.html" class="brand-link">
				<img src="<?php echo base_url() ?>assets/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
				<span class="brand-text font-weight-light">Admin</span>
			</a>
			-->
			<!-- Sidebar -->
			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 d-flex">
					<div class="image">
						<img class="profile-user-img img-fluid img-circle"
						src="<?php echo base_url('./assets/foto/'.$this->session->userdata('image')); ?>" />
					</div>
					<div class="info">
					<h5 style="color:white"><?php echo $this->session->userdata('username'); ?>
					</div>
				</div>
				<!-- Sidebar Menu -->
				<nav class="mt-2">
					<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
						<li class="nav-item has-treeview">
							<a href="<?php echo base_url("admin/Overview") ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-user"></i>
								<p>
									My Profile
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<?php if ($this->session->userdata('sektor')=='PERTANIAN PANGAN') {?>
									<li class="nav-item">
										<a href="<?= base_url('user/perpang/index') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Admin Pertanian Pangan</p>
										</a>
									</li>
								<?php }elseif ($this->session->userdata('sektor')=='PERIKANAN') {?>
									<li class="nav-item">
									<a href="<?= base_url('user/perikanan/index') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Admin Perikanan</p>
									</a>
								</li>
								<?php }elseif ($this->session->userdata('sektor')=='PETERNAKAN') {?>
									<li class="nav-item">
									<a href="<?= base_url('user/peternakan/index') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Admin Peternakan</p>
									</a>
								</li>
								<?php }elseif ($this->session->userdata('sektor')=='HORTIKULTURA') {?>
									<li class="nav-item">
									<a href="<?= base_url('user/horti/index') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Admin Hortikultura</p>
									</a>
								</li>
								<?php }else{
									echo "Bukan Admin";
								} ?>		
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-bars"></i>
								<p>
									Menu Sektor
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<?php if ($this->session->userdata('sektor')=='PERTANIAN PANGAN') {?>
									<li class="nav-item">
										<a href="<?= base_url('admin/perpang') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Pertanian Pangan</p>
										</a>
									</li>
								<?php }elseif ($this->session->userdata('sektor')=='PERIKANAN') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/perikanan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Perikanan</p>
									</a>
								</li>
								<?php }elseif ($this->session->userdata('sektor')=='PETERNAKAN') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/peternakan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Peternakan</p>
									</a>
								</li>
								<?php }elseif ($this->session->userdata('sektor')=='HORTIKULTURA') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/horti') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Hortikultura</p>
									</a>
								</li>
								<?php }else{
									echo "Bukan Admin";
								} ?>		
							</ul>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fa-table"></i>
								<p>
									Menu Bahan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>

							<ul class="nav nav-treeview">
							<?php if ($this->session->userdata('sektor')=='PERTANIAN PANGAN') {?>
									<li class="nav-item">
										<a href="<?= base_url('admin/bahan_perpang') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Bahan Pertanian Pangan</p>
										</a>
									</li>
									<?php }elseif ($this->session->userdata('sektor')=='PERIKANAN') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/bahan_perikanan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Jenis Ikan</p>
									</a>
								</li>
								<?php }elseif ($this->session->userdata('sektor')=='PETERNAKAN') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/bahan_peternakan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Bahan Peternakan</p>
									</a>
								</li>
								<?php }elseif ($this->session->userdata('sektor')=='HORTIKULTURA') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/bahan_horti') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Bahan Hortikultura</p>
									</a>
								</li>
								<?php }else{
									echo "Bukan Admin";
								} ?>		
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('admin/nama_pasar') ?>" class="nav-link">
								<i class="nav-icon fas fa-search-location"></i>
								<p>Nama Pasar</p>
							</a>
						</li>
						<?php if ($this->session->userdata('sektor')=='PERIKANAN') {?>
						<li class="nav-item">
							<a href="<?= base_url('admin/nama_pedagang') ?>" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>Nama Pedagang</p>
							</a>
						</li>
						<?php }else{
									
								} ?>
						<li class="nav-header">PELAPORAN</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon far fa-chart-bar"></i>
								<p>
									Laporan
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
						<ul class="nav nav-treeview">
								<?php if ($this->session->userdata('sektor')=='PERTANIAN PANGAN') {?>
									<li class="nav-item">
										<a href="<?= base_url('admin/perpang/laporan') ?>" class="nav-link">
											<i class="far fa-file nav-icon"></i>
											<p>Laporan Pertanian Pangan</p>
										</a>
									</li>
								<?php }elseif ($this->session->userdata('sektor')=='PERIKANAN') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/perikanan/laporan') ?>" class="nav-link">
										<i class="far fa-file nav-icon"></i>
										<p>Laporan Perikanan</p>
									</a>
								</li>
								<?php }elseif ($this->session->userdata('sektor')=='PETERNAKAN') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/peternakan/laporan') ?>" class="nav-link">
										<i class="far fa-file nav-icon"></i>
										<p>Laporan Peternakan</p>
									</a>
								</li>
								<?php }elseif ($this->session->userdata('sektor')=='HORTIKULTURA') {?>
									<li class="nav-item">
									<a href="<?= base_url('admin/horti/laporan') ?>" class="nav-link">
										<i class="far fa-file nav-icon"></i>
										<p>Laporan Hortikultura</p>
									</a>
								</li>
								<?php }else{
									echo "Bukan Admin";
								} ?>		
							</ul>
						<!-- </li> 
						<li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">
								 <i class="nav-icon  fa fa-sign-out"></i>	 
								<i class="nav-icon fas fa-sign-out-alt"></i>
								<p>logout</p>
							</a>
						</li> -->

					</ul>
				</nav>
			</div>
		</aside>
