<!DOCTYPE html>
<html lang="en">
<head>
<title>Sistem Manajemen Data Produsen</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Conference project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="<?php echo base_url() ?>assets/assets2/images/fav.png">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets2/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url() ?>assets/assets2/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets2/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets2/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets2/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets2/styles/events.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets2/styles/events_responsive.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets2/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/assets2/styles/responsive.css">

</head>
<body>


<div class="super_container">

  <!-- Menu -->

  <div class="menu trans_500">
    <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
      <div class="menu_close_container"><div class="menu_close"></div></div>
      <div class="logo menu_logo">
        <a href="#">
          <div class="logo_container d-flex flex-row align-items-start justify-content-start">
            <div class="logo_image"><div><img src="<?php echo base_url() ?>assets/assets2/images/dinas.jpeg" height="75" alt=""></div></div>
              <div class="logo_content">
                <div id="logo_text" class="logo_text logo_text_not_ie">Dinas Pertanian Pangan<p><h3> Dan Perikanan</h3></div>
                  <div class="logo_sub"><h4 style="text-align: left;">Kabupaten Sleman</h4></div>
                </div>
              </div>
            </a>  
          </div>
      <ul>
        <li class="menu_item"><a href="index.html">Home</a></li>
        <li class="menu_item"><a href="subsektor">Grafik</a></li>
      </ul>
    </div>
  </div>
  
  
  <!-- Home -->

  <div class="home">
    <!-- <div class="home_background" style="background-image: url(images/index.jpg)"></div> -->
    <div class="parallax_background parallax-window" data-parallax="scroll"><img src="<?php echo base_url() ?>assets/assets2/images/ss2.png" width="100%" height="100%" style="position:absolute" class="img-responsive" data-speed="0.8"></div>

    <!-- Header -->

    <header class="header" id="header">
      <div>
        <div class="header_top">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                  <div>
                    <a href="#">
                      <div class="logo_container d-flex flex-row align-items-start justify-content-start">
                        <div class="logo_image"><div><img src="<?php echo base_url() ?>assets/assets2/images/dinas.jpeg" height="75" alt=""></div></div>
                        <div class="logo_content">
                          <div id="logo_text" class="logo_text logo_text_not_ie">Dinas Pertanian Pangan<p><h3> Dan Perikanan</h3></div>
                          <div class="logo_sub"><h4>Kabupaten Sleman</h4></div>
                        </div>
                      </div>
                    </a>  
                  </div>
                  <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header_nav" id="header_nav_pin">
          <div class="header_nav_inner">
            <div class="header_nav_container">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                      <nav class="main_nav">
                        <ul>
                          <li class="active"><a href="beranda">Home</a></li>
                          <li><a href="subsektor">Grafik</a></li>
                        </ul>
                      </nav>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="search_container">
              <div class="container">
                <div class="row">
                  <div class="col">
                    <div class="search_content d-flex flex-row align-items-center justify-content-end">
                      <form action="#" id="search_container_form" class="search_container_form">
                        <input type="text" class="search_container_input" placeholder="Search" required="required">
                        <button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </header>

    <div class="home_content_container">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="text-center"><br><br><br>
              <div class="home_title"><h1>Dinas Pertanian, Pangan dan Perikanan</h1></div>
              <div class="home_location">Kabupaten Sleman</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Intro -->

  <div class="intro">
    <div class="intro_content d-flex flex-row flex-wrap align-items-start justify-content-between">

      <!-- Intro Item -->
      <div class="event">
            <div class="row row-lg-eq-height">
              <div class="col-lg-6 event_col">
                <div class="event_image_container">
                  <div class="background_image"><img src="<?php echo base_url() ?>assets/assets2/images/img2.jpg" width="480" height="280"></div>
                  <div class="date_container">
                    <a href="#">
                      <span class="date_content d-flex flex-column align-items-center justify-content-center">
                        <div class="date_day">15</div>
                        <div class="date_month">May</div>
                      </span>
                    </a>  
                  </div>
                </div>
              </div>
              <div class="col-lg-6 event_col">
                <div class="event_content">
                  <div class="event_title">Pada 2020</div>
                  <div class="event_location">Dinas Pertanian Pangan dan Perikanan</div>
                  <div class="event_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum..</p>
                  </div>
                  <div class="event_speakers">
                    <!-- Event Speaker -->
                  
                    <div class="button_2 event_button event_button_2"><a href="#">Read more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Event -->
          <div class="event">
            <div class="row row-lg-eq-height">
              <div class="col-lg-6 event_col">
                <div class="event_image_container">
                  <div class="background_image"><img src="<?php echo base_url() ?>assets/assets2/images/img3.jpg" width="480" height="280"></div>
                  <div class="date_container">
                    <a href="#">
                      <span class="date_content d-flex flex-column align-items-center justify-content-center">
                        <div class="date_day">15</div>
                        <div class="date_month">May</div>
                      </span>
                    </a>  
                  </div>
                </div>
              </div>
              <div class="col-lg-6 event_col">
                <div class="event_content">
                  <div class="event_title">Pemeberian 2020</div>
                  <div class="event_location">Dinas Pertanian Pangan dan Perikanan</div>
                  <div class="event_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="event_speakers">
                    <!-- Event Speaker -->
                    <!-- Event Speaker -->
                
                    <div class="button_2 event_button event_button_2"><a href="#">Read more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

           <!-- Event -->
          <div class="event">
            <div class="row row-lg-eq-height">
              <div class="col-lg-6 event_col">
                <div class="event_image_container">
                  <div class="background_image"><img src="<?php echo base_url() ?>assets/assets2/images/img3.jpg" width="480" height="280"></div>
                  <div class="date_container">
                    <a href="#">
                      <span class="date_content d-flex flex-column align-items-center justify-content-center">
                        <div class="date_day">15</div>
                        <div class="date_month">May</div>
                      </span>
                    </a>  
                  </div>
                </div>
              </div>
              <div class="col-lg-6 event_col">
                <div class="event_content">
                  <div class="event_title">Sosialisasi</div>
                  <div class="event_location">Dinas Pertanian Pangan dan Perikanan</div>
                  <div class="event_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="event_speakers">
                    <!-- Event Speaker -->
                    <!-- Event Speaker -->
                
                    <div class="button_2 event_button event_button_2"><a href="#">Read more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Event -->
          <div class="event">
            <div class="row row-lg-eq-height">
              <div class="col-lg-6 event_col">
                <div class="event_image_container">
                  <div class="background_image"><img src="<?php echo base_url() ?>assets/assets2/images/img4.jpg" width="480" height="280"></div>
                  <div class="date_container">
                    <a href="#">
                      <span class="date_content d-flex flex-column align-items-center justify-content-center">
                        <div class="date_day">15</div>
                        <div class="date_month">May</div>
                      </span>
                    </a>  
                  </div>
                </div>
              </div>
              <div class="col-lg-6 event_col">
                <div class="event_content">
                  <div class="event_title">Sosialisasi</div>
                  <div class="event_location">Dinas Pertanian Pangan dan Perikanan</div>
                  <div class="event_text">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>

                    <!-- Event Speaker -->
                  <div class="event_buttons">
                   <div class="button_2 event_button event_button_2"><a href="#">Read more</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</br></br>
</br>

  <!-- Footer -->

  <footer class="footer" style="background-color: #868e96">
    <div class="footer_content">
          <div class="container">
       
          <!-- Footer Column -->
        <div class="logo menu_logo">
          <div class="logo_container d-flex flex-row align-items-start justify-content-start">
            <div class="logo_image"><div><img src="<?php echo base_url() ?>assets/assets2/images/dinas.jpeg" height="75" alt=""></div></div>
              <div class="logo_content">
                <div id="logo_text" class="logo_text logo_text_not_ie"><p><h4 style="color: white">Dinas Pertanian Pangan dan Perikanan Kabupaten Sleman</h4></p></div>
                  <div class="logo_sub"><h5 style="color: white">Jl.Dr.Radjimin,Sucen,Triharjo,Sleman, D.I.Yogyakarta</h5></div>
                </div>
          </div>
      </div> 
  </footer> 
</div>

<script src="<?php echo base_url() ?>assets/assets2/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url() ?>assets/assets2/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url() ?>assets/assets2/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/assets2/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url() ?>assets/assets2/plugins/easing/easing.js"></script>
<script src="<?php echo base_url() ?>assets/assets2/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url() ?>assets/assets2/js/custom.js"></script>
</body>
</html>