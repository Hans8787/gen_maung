<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800"><?= $title; ?></h1>

          <?= $this->session->flashdata('message'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Berita Seputar SMK Negeri 1 Jamblang</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>News</th>
                      <th>Cover</th>
                      <th>Date</th>
                      <th>Location</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>No</th>
                      <th>News</th>
                      <th>Cover</th>
                      <th>Date</th>
                      <th>Location</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <?php $i = 1; ?>
                    <?php foreach($berita as $b) : ?>
                    <tr>
                      <td><?= $i; ?></td>
                      <td style="width: 200px;">
                        <?= $b['judul']; ?>
                      </td>
                      <td>
                        <img src="<?= base_url('assets/cover/') . $b['cover']; ?>" class="img-thumbnail" style="width: 100px;">
                      </td>
                      <td><?= date('d F Y', $b['tanggal']); ?></td>
                      <td><?= $b['tempat']; ?></td>
                      <td>
                        <a href="<?= base_url('berita/editberita/'); ?><?= $b['slug']; ?>" class="btn btn-success btn-square mb-1">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="<?= base_url('berita/hapusberita/'); ?><?= $b['id']; ?>" class="btn btn-danger btn-square mb-1" onclick="return confirm('Are you sure delete it?');">
                          <i class="fas fa-trash"></i>
                        </a>
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
        <!-- /.container-fluid -->