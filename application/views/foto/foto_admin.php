  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 910px; margin-top: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lihat Galery
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="#">Galeri</a></li>
        <li class="active">Galeri Foto</li>
      </ol>
      <!-- pemberitahuan berhasil menghapus Foto -->
      <?php if( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dimissable" role="alert" style="margin: 9px 0 0 0;">
          Satu Foto <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 900px">

      <!-- Galeri Foto -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Galeri Foto</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <div class="row">
          <?php $i = 1; ?>
          <?php foreach ( $foto as $gal ) : ?>
            <div style="margin: 14px; height: 200px;" class="col-lg-2">
              <img src="<?= base_url(); ?><?= $gal["file"]; ?>" alt="user-image" style="width: 190px; max-height: 190px; margin-bottom: 3px; border-radius: 4px; box-shadow: 1px 1px 2px 1px;">
              <p class="users-list-name pull-left"><?= $gal["capt"]; ?></p>
              <a href="<?= base_url(); ?>foto/hapus/<?= $gal["id"]; ?>" onclick="return confirm('Hapus Foto?');"><p class="users-list-name pull-right">Hapus</p></a>
            </div>
          <?php $i++; ?>
          <?php endforeach; ?>
          </div>
          <!-- /.users-list -->

          <!-- Navigasi Pagination Foto -->
          <div style="margin-left: 20px;">
            <?= $this->pagination->create_links(); ?>
          </div>
        </div>
      </div>
      <!-- /.box-body -->

    </section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->