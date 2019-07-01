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
                <h3>Nama : <?= $baca['nama']; ?></h3>
                <h5>Email : <?= $baca['email']; ?>
                  <span class="mailbox-read-time pull-right"><?= $baca['tanggal']; ?></span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-read-message">
                <h3 class="justify-content-center">Pesan</h3>
                <p><?= $baca['content']; ?></p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            <div class="box-footer">
              <a href="<?= base_url(); ?>kotak_saran/hapus/<?= $baca['id']; ?>"><button type="button" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button></a>
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