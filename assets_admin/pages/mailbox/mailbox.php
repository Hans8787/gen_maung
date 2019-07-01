<?php
session_start();

if ( !isset($_SESSION["admin"]) ) {
  header('Location: ../../../../index.php');
  exit;
}

if ( !isset($_SESSION["user_login"]) ) {
	header('Location: ../../../login.php');
	exit;
}

require '../../../index.php';

$id = $_SESSION['id'];

$akun = DB::q1("SELECT * FROM akun WHERE id = $id");

if ( $akun["foto"] == '' ) {
  $akun["foto"] = 'profil/b02.jpg';
}

// pagination
// konfigurasi
$jumlahDataPerHalaman = 15;
$jumlahData = count(DB::q("SELECT * FROM ideabox"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;

$result = DB::q("SELECT * FROM ideabox  ORDER BY `tanggal` DESC LIMIT $awalData, $jumlahDataPerHalaman");

// jumlah pesan yang belum dibuka
// query data event berdasarkan id
$unread = DB::q1("SELECT COUNT(*) AS c FROM `ideabox` WHERE status = 1");

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>GenMaung | Kotak Saran</title>
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
  
  <style>
    .unread {
      font-weight: bold;
      background-color: #d6d6d6 !important;
    }
  </style>

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
  <aside class="main-sidebar" style="position: fixed;">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar slimScrollDiv">
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
            <li><a href="../../../galeri.php"><i class="fa fa-circle-o"></i> Galeri</a></li>
            <li><a href="../../../upload.php"><i class="fa fa-circle-o"></i> Upload Foto & Video</a></li>
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
        Kotak Saran
        <?php if($unread["c"] >= 1) : ?>
          <small><?= $unread["c"]; ?> pesan belum dibaca</small>
        <?php endif; ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../../../../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Kotak Saran</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 810px;">

        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Pesan</h3>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-controls">
                <!-- Check all button -->
                <a href="mailbox.php" class="btn btn-default btn-sm" title="Previous"><i class="fa fa-refresh"></i></a>
                <div class="pull-right">
                  <div class="btn-group">
                    <div class="box-tools pull-right">
                      <!-- Previous -->
                      <?php if( $halamanAktif > 1 ) : ?>
                        <a href="?halaman=<?= $halamanAktif - 1; ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                      <?php else : ?>
                        <a href="?halaman=<?= $halamanAktif - 1; ?>" class="btn btn-default btn-sm disabled" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                      <?php endif; ?>

                      <!-- Previous -->
                      <?php if( $halamanAktif < $jumlahHalaman ) : ?>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                      <?php else : ?>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn btn-default btn-sm disabled" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                      <?php endif; ?>
                    </div>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>
                  <?php foreach($result as $row) : ?>
                    <tr class="<?php
                                if( $row["status"] == 1 ) {
                                  echo "unread";
                                } 
                               ?>">
                      <?php
                        if( $row["status"] == 1 ) {
                          echo '<td class="mailbox-star"><i class="fa fa-star text-yellow"></i></td>';
                        } else {
                          echo '<td class="mailbox-star"><i class="fa fa-star-o text-yellow"></i></td>';
                        }
                      ?>
                      <td class="mailbox-name"><a href="read-mail.php?id=<?= $row["id"]; ?>"><?= $row["email"] ?></a></td>
                      <td class="mailbox-subject"><b><?= $row["nama"] ?></b> - <?= substr($row["content"], 0, 20) ?>....
                      </td>
                      <td class="mailbox-attachment"></td>
                      <td class="mailbox-date">
                        <?php 
                          $now = new DateTime;
                          $tanggal = new DateTime($row["tanggal"]);

                          $interval = $now->diff($tanggal);
                          $minuteDiff = ( ( ($interval->days*24) + $interval->h ) *60 ) + $interval->i;
                          $secondDiff = $interval->s/60;
                          $minuteDiff += $secondDiff;

                          if ($minuteDiff <= 10) {
                            echo ceil($minuteDiff) . ' menit yang lalu';
                          } else {
                            echo $row["tanggal"];
                          }

                        ?>
                      </td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer no-padding">
              <div class="mailbox-controls">
                <!-- Pull Right -->
                <div class="pull-right">
                  <div class="btn-group">
                    <div class="box-tools pull-right">
                      <!-- Previous -->
                      <?php if( $halamanAktif > 1 ) : ?>
                        <a href="?halaman=<?= $halamanAktif - 1; ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                      <?php else : ?>
                        <a href="?halaman=<?= $halamanAktif - 1; ?>" class="btn btn-default btn-sm disabled" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                      <?php endif; ?>

                      <!-- Previous -->
                      <?php if( $halamanAktif < $jumlahHalaman ) : ?>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn btn-default btn-sm" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                      <?php else : ?>
                        <a href="?halaman=<?= $halamanAktif + 1; ?>" class="btn btn-default btn-sm disabled" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                      <?php endif; ?>
                    </div>
                  </div>
                  <!-- /.btn-group -->
                </div>
                <!-- /.pull-right -->
              </div>
            </div>
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
    <strong>Copyright &copy; 2019 <a href="https://www.facebook.com/farhan.almoza">Farhan Almoza</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-user"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Profile Settings</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Change Avatar</h4>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-phone bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Your WA Number</h4>

                <p>Phone +62 896-2213-5384</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Your Mail Address</h4>

                <p>oyisamfarhan@gmial.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-laptop bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Teknik Komputer & Jaringan</h4>

                <p>SMK Negeri 1 Jamblang</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->
      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
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
<!-- iCheck -->
<script src="../../plugins/iCheck/icheck.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Enable iCheck plugin for checkboxes
    //iCheck for checkbox and radio inputs
    $('.mailbox-messages input[type="checkbox"]').iCheck({
      checkboxClass: 'icheckbox_flat-blue',
      radioClass: 'iradio_flat-blue'
    });

    //Enable check and uncheck all functionality
    $(".checkbox-toggle").click(function () {
      var clicks = $(this).data('clicks');
      if (clicks) {
        //Uncheck all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("uncheck");
        $(".fa", this).removeClass("fa-check-square-o").addClass('fa-square-o');
      } else {
        //Check all checkboxes
        $(".mailbox-messages input[type='checkbox']").iCheck("check");
        $(".fa", this).removeClass("fa-square-o").addClass('fa-check-square-o');
      }
      $(this).data("clicks", !clicks);
    });

    //Handle starring for glyphicon and font awesome
    $(".mailbox-star").click(function (e) {
      e.preventDefault();
      //detect type
      var $this = $(this).find("a > i");
      var glyph = $this.hasClass("glyphicon");
      var fa = $this.hasClass("fa");

      //Switch states
      if (glyph) {
        $this.toggleClass("glyphicon-star");
        $this.toggleClass("glyphicon-star-empty");
      }

      if (fa) {
        $this.toggleClass("fa-star");
        $this.toggleClass("fa-star-o");
      }
    });
  });
</script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
