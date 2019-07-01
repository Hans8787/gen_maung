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
        <li class="active">Galeri Video</li>
      </ol>
      <!-- pemberitahuan berhasil menghapus Video -->
      <?php if( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dimissable" role="alert" style="margin: 9px 0 0 0;">
          Satu Video <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
    </section>

    <!-- Main content -->
    <section class="content" style="min-height: 900px">

      <!-- Galeri Video -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title">Galeri Video</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body no-padding">
          <div class="row">
          <?php $i = 1; ?>
          <?php foreach ( $video as $gal ) : ?>
            <div style="margin: 0 56px 2px 23px; padding-bottom: 3px;" class="col-lg-3">
              <video width="320" height="240" controls style="box-shadow: 1px 1px 1px 1px;">
                <source src="<?= base_url(); ?><?= $gal["video"]; ?>" type="video/mp4">
              </video>
              <p class="users-list-name pull-left"><?= $gal["judul"]; ?></p>
              <a href="<?= base_url(); ?>video/hapus/<?= $gal["id"]; ?>" onclick="return confirm('Hapus Video?');"><p class="users-list-name pull-right">Hapus</p></a>
            </div>
          <?php $i++; ?>
          <?php endforeach; ?>
          </div>
          <!-- /.users-list -->

          <!-- Navigasi Pagination Video -->
          <div style="margin-left: 20px;">
            <?= $this->pagination->create_links(); ?>
          </div>

        </div>
        <!-- /.box-body -->
      </div>

    </section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->