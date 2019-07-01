<?php 
session_start();

if ( !isset($_GET["id"]) ) {
  header('Location: mailbox.php');
  exit;
}

if ( !isset($_SESSION["admin"]) ) {
  header('Location: ../../../../index.php');
  exit;
}

if ( !isset($_SESSION["user_login"]) ) {
  header('Location: ../../../login.php');
  exit;
}

require '../../../index.php';

$idFoto = $_SESSION['id'];

$akun = DB::q1("SELECT * FROM akun WHERE id = $idFoto");

if ( $akun["foto"] == '' ) {
  $akun["foto"] = 'profil/b02.jpg';
}

// ambil data dari URL
$id = $_GET["id"];
// query data event berdasarkan id
$baca = DB::q1("SELECT * FROM `ideabox` WHERE id = $id");
DB::i("UPDATE `ideabox` SET `status` = '2' WHERE `ideabox`.`id` = $id");

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GenMaung | Baca Pesan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/flat/blue.css">
  <!-- Favicon -->
  <link rel="icon" href="../../../../assets_front/img/favicon.png">
  <!-- My CSS -->
  <style>
    /* DESKTOP VERSION */
    @media (min-width: 769px) {
      .content-wrapper {
        margin-top: 50px !important;
      }
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
<body class="hold-transition skin-blue sidebar-mini">
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
            <img src="../../../../<?= $akun['foto']; ?>" class="user-image" alt="User Image">
            <span class="hidden-xs"><?= $_SESSION["nama"]; ?></span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="../../../../<?= $akun['foto']; ?>" class="img-circle" alt="User Image">

              <p>
                <?= $_SESSION["nama"]; ?> - Admin
                <small>OSIS MPK`18</small>
              </p>
            </li>
            
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="justify-content-center pull-right">
                <a href="../../../logout.php" class="btn btn-default btn-flat">Logout</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar" style="position: fixed">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <div style="width: 45px;height: 45px;background: #1a2226;overflow: hidden;border-radius: 50%;display: flex;align-items: center;justify-content: center;">
            <img src="../../../../<?= $akun['foto']; ?>" alt="User Image" style="width: 100%">
          </div>
        </div>
        <div class="pull-left info">
          <p><?= $_SESSION["nama"]; ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="../../../../index.php">
            <i class="fa fa-home"></i> <span> Beranda</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-list-alt"></i> <span>Events</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../../../admin.php"><i class="fa fa-circle-o"></i> Tambah Events</a></li>
            <li><a href="../../../daftar_event.php"><i class="fa fa-circle-o"></i> Daftar Event</a></li>
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
            <li><a href="../../../info.php"><i class="fa fa-circle-o"></i> Lihat Info</a></li>
            <li><a href="../../../edit.php"><i class="fa fa-circle-o"></i> Edit Info</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-picture-o"></i> <span>Galeri</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="../tables/simple.html"><i class="fa fa-circle-o"></i> Galeris</a></li>
            <li><a href="../tables/data.html"><i class="fa fa-circle-o"></i> Upload Foto & Video</a></li>
          </ul>
        </li>
        <li>
          <a href="../calendar.php">
            <i class="fa fa-calendar"></i> <span>Kalender</span>
          </a>
        </li>
        <li class="active">
          <a href="mailbox.php">
            <i class="fa fa-envelope"></i> <span>Kotak Saran</span>
          </a>
        </li>
        <li>
          <a href="../../../../admin/list_users.php">
            <i class="fa fa-user"></i> <span>List Users</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Baca Pesan
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../../../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Kotak Saran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Baca Pesan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3><?= $baca['nama']; ?></h3>
                <h5>From: <?= $baca['email']; ?>
                  <span class="mailbox-read-time pull-right"><?= $baca['tanggal']; ?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-read-message">
                <p><?= $baca['content']; ?></p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="hapus.php?id=<?= $id; ?>"><button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button></a>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /. box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2019 <a href="https://facebook.com/farhan.almoza">Farhan Almoza</a>.</strong> All rights
    reserved.
  </footer>
  
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Slimscroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
