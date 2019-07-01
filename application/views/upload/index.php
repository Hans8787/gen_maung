  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 910px; margin-top: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Upload Foto & Video
        <small>Upload yang positif dan bermanfaat</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Galeri</a></li>
        <li class="active">Upload Foto & Video</li>
      </ol>
    </section>
    <?php if( isset($_GET["act"]) && $_GET["act"] == 'es' ) {
      echo '<div class="callout callout-success" style="margin: 5px 15px;"> 
              <h4>Upload Success</h4>
            </div>';
    } ?>

    <!-- Main content -->
    <section class="content" style="min-height: 900px">

      <!-- Upload Foto -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Upload Foto</h3>
        </div>
        <!-- /.box-header -->

        <form role="form" action="upload_fv.php" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <!-- Judul -->
            <div class="form-group">
              <label for="capt">Judul</label>
              <input type="text" class="form-control" id="capt" name="capt" placeholder="Tulis Judul.." autocomplete="off" required>
            </div>
            <!-- upload -->
            <div class="form-group">
              <label for="upload">File input</label>
              <input type="file" name="fv" id="upload" required>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>
      </div>

      <!-- Upload Video -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Upload Vdeo</h3>
        </div>
        <!-- /.box-header -->

        <form role="form" action="upload_video.php" method="post" enctype="multipart/form-data">
          <div class="box-body">
            <!-- Judul -->
            <div class="form-group">
              <label for="capt">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" placeholder="Tulis Judul.." autocomplete="off" required>
            </div>
            <!-- upload -->
            <div class="form-group">
              <label for="upload">File input</label>
              <input type="file" name="video" id="video" required>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">
            <button type="submit" class="btn btn-primary">Upload</button>
          </div>
        </form>
      </div>

    </section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->