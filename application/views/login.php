<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/img/ic.jpg">
  <link href="<?php echo base_url() ?>assets/auth/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url() ?>assets/auth/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">
<div class="parallax_background parallax-window" data-parallax="scroll"><img src="<?php echo base_url() ?>assets/img/bg.jpg" width="100%" height="100%" style="position:absolute" class="img-responsive" data-speed="0.8"></div>

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      <div class="col-lg-5">
          <div class="card-body p-5">
            <!-- Nested Row within Card Body -->
          <div class="row justify-content-center">
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                  <div class="logo_image"><div><img src="<?php echo base_url() ?>assets/img/adm.png" height="75" alt=""></div></div>
                  </div>
                  <form class="user" method="post" action="<?= base_url('Auth')?>">
                     <div class="form-group">
                     <label style="color:white">Username</label>
                      <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-user"></i></div>
                      <input type="text" class="form-control form-control" name="username" placeholder="Username">
                    </div>
                    <small class="form-text text-danger"><?= form_error("username"); ?></small>
                    </div>
                    <div class="form-group">
                    <label style="color:white">Password</label>
                      <div class="input-group-prepend">
                      <div class="input-group-text"><i class="fas fa-lock"></i></div>
                      <input type="password" class="form-control form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <small class="form-text text-danger"><?= form_error("password"); ?></small>
                    </div>
                    <div class="auth-data" data-authdata="<?= $this->session->flashdata('auth');?>"></div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-user btn-block "><i class="fas fa-sign-in-alt"></i>
                      Login
                    </button>
          </div>        
        </div>
       </div>
  </div>
  </div>
  
  <!-- Bootstrap core JavaScript-->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="<?php echo base_url() ?>assets/auth/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url() ?>assets/auth/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url() ?>assets/auth/js/sb-admin-2.min.js"></script>
  <script src="<?php echo base_url() ?>assets/admin/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/js/myscript.js"></script> 

</body>

</html>
