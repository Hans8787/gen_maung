  <!-- My Css -->
  <style>
    .aksi {
      width: 70px;
      height: 25px;
      float: left;
      margin: 0 0 3px 5px;
      border-radius: 5px;
      padding: 3px 7px;
    }

    .aksi a {
      color: white;
    }

    /* DESKTOP VERSION */
    @media (min-width: 769px) {
      .content-wrapper {
        margin-top: 50px !important;
      }
    }
  </style> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 916px; margin-top: 100px;">
    <!-- Content Header -->
    <section class="content-header">
      <h1>
        Daftar Berita
        <small>tabel daftar berita yang telah di posting</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="<?= base_url(); ?>berita">Berita</a></li>
        <li class="active">Daftar Berita</li>
      </ol>
      <!-- pemberitahuan berhasil menghapus berita -->
      <?php if( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dimissable" role="alert" style="margin: 9px 0 0 0;">
          Satu berita <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
    </section>

    <section class="content" style="min-height: 810px;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Daftar Berita</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="table-responsive">
                    <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                      <thead>
                        <!-- Table Header -->
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nama Kegiatan</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">Cover</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Waktu Pelaksanaan</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Tempat Pelaksanaan</th>
                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Aksi</th>
                      </tr>
                      </thead>

                      <!-- Isi Table Daftar Event -->
                      <tbody>
                      <?php $i = 1; ?>
                      <?php foreach ( $berita as $row ) : ?>
                      <tr>
                        <td><?= $i;  ?></td>
                        <td><a class="users-list-name" href="<?= base_url(); ?>berita/baca/<?= $row['slug'] ?>"><?= $row["judul"]; ?></a></td>
                        <td><img src="<?= base_url(); ?><?= $row["cover"]; ?>" style="width: 70px;"></td>
                        <td><?= $row["tanggal"]; ?></td>
                        <td><?= $row["tempat"]; ?></td>
                        <!-- aksi -->
                        <td>
                          <div class="aksi bg-yellow">
                            <a href="<?= base_url(); ?>berita/edit/<?= $row["slug"] ?>"><i class="menu-icon fa fa-edit fa-lg"></i> Edit</a>
                          </div>
                          <div class="aksi bg-red">
                            <a href="<?= base_url(); ?>berita/hapus/<?= $row['id']; ?>" onclick="return confirm('Hapus?');"><i class="menu-icon fa fa-trash-o fa-lg"></i>Hapus</a>
                          </div>
                        </td>
                      </tr>
                      <?php $i++; ?>
                      <?php endforeach; ?>
                      </tbody>
                    </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->

