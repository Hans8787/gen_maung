  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 910px; margin-top: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Input Berita
        <small>Dimohon agar memberikan hal yang bermanfaat untuk pembaca</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Berita</a></li>
        <li class="active">Input Berita</li>
      </ol>
      <!-- pemberitahuan berhasil menambahkan berita -->
      <?php if( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dimissable" role="alert" style="margin: 9px 0 0 0;">
          Satu berita <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>

    </section>
    
    <!-- Main content -->
    <section class="content" style="min-height: 900px">

      <!-- Default box -->
      <div class="box box-primary">

        <!-- form tambah berita -->
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="creator" value="admin">
          <div class="box-header with-border">
            <label>Judul Berita</label>
            <input type="text" class="form-control" name="judul" placeholder="Judul Berita" style="border-radius: 5px;" autocomplete="off">
            <small id="pesanError" class="form-text text-danger"><?= form_error('judul'); ?></small>
          </div>
          <div class="box-header with-border">
            <label>Tempat Pelaksanaan</label>
            <input type="text" class="form-control" name="tempat" placeholder="Tempat" style="border-radius: 5px;" autocomplete="off">
            <small id="pesanError" class="form-text text-danger"><?= form_error('tempat'); ?></small>
          </div>
          <!-- Date range -->
          <div class="form-group box-header with-border">
            <label>Waktu Pelaksanaan</label>
            <div class="input-group date">
              <div class="input-group-addon" style="border-radius: 5px 0 0 5px;" autocomplete="off">
                <i class="fa fa-calendar"></i>
              </div>
              <input type="text" class="form-control pull-right" name="tanggal" id="datepicker"  style="border-radius: 0 5px 5px 0;" autocomplete="off">
            </div>
            <small id="pesanError" class="form-text text-danger"><?= form_error('tanggal'); ?></small>
            <!-- /.input group -->
          </div>
          <!-- /.date -->
      		<div class="form-group box-header with-border">
            <label>Gambar</label>
      			<input class="form-control" type="file" id="InputFile" name="file" style="border-radius: 5px;" autocomplete="off" required>
      		</div>
          <!-- /.box-body -->
          <div class="form-group box-header with-border">
            <label>Konten</label>
            <textarea class="form-control texteditor" name="isiBerita" id="isiBerita" cols="30" rows="10" autocomplete="off"></textarea>
            <small id="pesanError" class="form-text text-danger"><?= form_error('isiBerita'); ?></small>
          </div>
          <!-- /.textarea-->
          <button type="submit" name="tambah" class="btn btn-primary" style="min-width: 120px; margin: 10px;">Publikasikan <i class="fa fa-send"></i></button>
        </form>
      </div>
      <!-- /.box -->

    </section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->