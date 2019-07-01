<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= $judul; ?></title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/img/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?= base_url(); ?>assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?= base_url(); ?>assets/lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/lib/venobox/venobox.css" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?= base_url(); ?>assets/css/nivo-slider-theme.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?= base_url(); ?>assets/css/style.css" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?= base_url(); ?>assets/css/responsive.css" rel="stylesheet">
  <!-- My CSS -->
  <style>
    /* DESKTOP VERSION */
    /* @media (min-width: 700px) {
      .single-blog-img {
        margin-bottom: 20px !important;
      }
    } */
  </style>


  <!-- =======================================================
    Theme Name: eBusiness
    Theme URL: https://bootstrapmade.com/ebusiness-bootstrap-corporate-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="">
                  <h1><span>Gen</span>Maung</h1>
                  <!-- Uncomment below if you prefer to use an image logo -->
                  <!-- <img src="assets/img/logo.png" alt="" title=""> -->
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="<?= base_url(); ?>">Beranda</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?= base_url(); ?>info">Info</a>
                  </li>
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Galeri<span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a class="page-scroll" href="<?= base_url(); ?>foto">Foto</a></li>
                      <li><a class="page-scroll" href="<?= base_url(); ?>video">Video</a></li>
                    </ul> 
                  </li>
                  <li>
                    <a class="page-scroll" href="<?= base_url(); ?>berita">Berita</a>
                  </li>
                  <?php if( $this->session->userdata('email') ) : ?>
                    <li>
                      <a class="page-scroll" href="<?= base_url('user'); ?>">My Profile</a>
                    </li>
                  <?php else : ?>
                    <li>
                      <a class="page-scroll" href="<?= base_url('auth'); ?>">Login <i class="fa fa-sign-in"></i></a>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->