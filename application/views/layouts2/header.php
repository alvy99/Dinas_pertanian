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
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">

	<!-- Google Font: Source Sans Pro -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
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
								<a href="<?php echo base_url() ?>home" class="btn btn-default"><i class="fa fa-desktop icon"></i>Preview
							<a href="<?php echo base_url() ?>auth/logout" type="button" class="btn btn-danger tombol-keluar" data-title="Sign Out" data-message="Apakah Anda yakin ingin keluar?" title="Sign Out">Sign Out <i class="fa fa-arrow-circle-right"></i></a>
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
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
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
							<a href="<?php echo base_url("admin/Page") ?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>
									Dashboard
								</p>
							</a>
						</li>
						<li class="nav-item has-treeview">
							<a href="#" class="nav-link">
								<i class="nav-icon fas fas fa-user"></i>
								<p>
									Profile
									<i class="fas fa-angle-left right"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
							<li class="nav-item">
									<a href="<?php echo base_url('superadmin/user/profil') ?>"  class="nav-link">
										<i class="fas fa-circle nav-icon"></i>
										<p>My Profile</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('superadmin/manajemenuser') ?>" class="nav-link">
								<i class="nav-icon fas fa-user-plus"></i>
								<p>Manajemen Admin</p>
							</a>
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
									<li class="nav-item">
										<a href="<?= base_url('superadmin/perpang') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Pertanian Pangan</p>
										</a>
									</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/perikanan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Perikanan</p>
									</a>
								</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/peternakan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Peternakan</p>
									</a>
								</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/horti') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Hortikultura</p>
									</a>
								</li>
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
									<li class="nav-item">
										<a href="<?= base_url('superadmin/bahan_perpang') ?>" class="nav-link">
											<i class="far fa-circle nav-icon"></i>
											<p>Bahan Pertanian Pangan</p>
										</a>
									</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/bahan_perikanan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Jenis Ikan</p>
									</a>
								</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/bahan_peternakan') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Bahan Peternakan</p>
									</a>
								</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/bahan_horti') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Bahan Hortikultura</p>
									</a>
								</li>
							</ul>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('superadmin/nama_pasar') ?>" class="nav-link">
								<i class="nav-icon fas fa-search-location"></i>
								<p>Nama Pasar</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('superadmin/nama_pedagang') ?>" class="nav-link">
								<i class="nav-icon fas fa-users"></i>
								<p>Nama Pedagang</p>
							</a>
						</li>
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
									<li class="nav-item">
										<a href="<?= base_url('superadmin/perpang/laporan') ?>" class="nav-link">
											<i class="far fa-file nav-icon"></i>
											<p>Pertanian Pangan</p>
										</a>
									</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/perikanan/laporan') ?>" class="nav-link">
										<i class="far fa-file nav-icon"></i>
										<p>Perikanan</p>
									</a>
								</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/peternakan/laporan') ?>" class="nav-link">
										<i class="far fa-file nav-icon"></i>
										<p>Peternakan</p>
									</a>
								</li>
									<li class="nav-item">
									<a href="<?= base_url('superadmin/horti/laporan') ?>" class="nav-link">
										<i class="far fa-file nav-icon"></i>
										<p>Hortikultura</p>
									</a>
								</li>
							</ul>
						</li>

						<!-- <li class="nav-item">
							<a class="nav-link" href="<?php echo base_url('auth/logout'); ?>">
								<!-- <i class="nav-icon  fa fa-sign-out"></i>	 
								<i class="nav-icon fas fa-sign-out-alt"></i>
								<p>logout</p>
							</a>
						 </li> -->
					</ul>
				</nav>
			</div>
		</aside>
		
		
