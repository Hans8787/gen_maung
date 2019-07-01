<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?= $judul; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/dist/css/skins/_all-skins.min.css">
  <!-- Favicon -->
  <link rel="icon" href="<?= base_url(); ?>assets/img/favicon.png">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/bower_components/fullcalendar/dist/fullcalendar.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets_admin/bower_components/fullcalendar/dist/fullcalendar.print.min.css" media="print">
  <!-- My CSS -->
  <style>
    /* DESKTOP VERSION */
    @media (min-width: 769px) {
      .content-wrapper {
        margin-top: 50px !important;
      }
    }

    .unread {
      font-weight: bold;
      background-color: #d6d6d6 !important;
    }

  </style>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini wysihtml5-supported">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header" style="position: fixed; width: 100%;">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>Mg</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Gen</b>Maung</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?= base_url(); ?>assets/img/favicon.png" class="user-image" alt="User Image">
              <span class="hidden-xs">nama</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?= base_url(); ?>assets/img/favicon.png" class="img-circle" alt="User Image">

                <p>
                  nama
                  <small>Admin</small>
                </p>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="justify-content-center pull-right">
                  <a href="logout.php" class="btn btn-default btn-flat">Logout</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar" style="position: fixed">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <div style="width: 45px;height: 45px;background: #1a2226;overflow: hidden;border-radius: 50%;display: flex;align-items: center;justify-content: center;">
            <img src="<?= base_url(); ?>assets/img/favicon.png" class="img-circle" alt="User Image" style="width: 100%">
          </div>
        </div>
        <div class="pull-left info">
          <p>nama</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
    		<li class="header">MAIN NAVIGATION</li>
    		<li>
          <a href="<?= base_url(); ?>">
            <i class="fa fa-home"></i> <span> Beranda</span>
          </a>
        </li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-list-alt"></i> <span>Berita</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?= base_url(); ?>berita/input_berita"><i class="fa fa-circle-o"></i> Input Berita</a></li>
            <li><a href="<?= base_url(); ?>berita/daftar_berita"><i class="fa fa-circle-o"></i> Daftar Berita</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i>
            <span>Info Sekolah</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>info/info_admin"><i class="fa fa-circle-o"></i> Info</a></li>
            <li><a href="<?= base_url(); ?>info/edit_info"><i class="fa fa-circle-o"></i> Edit Info</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o"></i>
            <span>Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>foto/foto_admin"><i class="fa fa-circle-o"></i> Galeri Foto</a></li>
            <li><a href="<?= base_url(); ?>video/video_admin"><i class="fa fa-circle-o"></i> Galeri Video</a></li>
            <li><a href="<?= base_url(); ?>upload_media"><i class="fa fa-circle-o"></i> Tambah Foto & Video</a></li>
          </ul>
        </li>
        
        <li>
          <a href="<?= base_url(); ?>kalender">
            <i class="fa fa-calendar"></i> <span>Kalender</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url(); ?>kotak_saran">
            <i class="fa fa-envelope"></i> <span>Kotak Saran</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url(); ?>daftar_pengguna">
            <i class="fa fa-user"></i> <span>Daftar Pengguna</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>