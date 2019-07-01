  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit User
        <small>mengedit user dengan username: <?= $akun['username']; ?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="<?= base_url(); ?>daftar_pengguna">List User</a></li>
        <li class="active">Edit User</li>
      </ol>
      <!-- pemberitahuan berhasil mengedit user -->
      <?php if( $this->session->flashdata('flash') ) : ?>
        <div class="alert alert-success alert-dimissable" role="alert" style="margin: 9px 0 0 0;">
          Satu user <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
      <?php endif; ?>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box box-primary">
        <form action="" method="post" enctype="multipart/form-data">
          <input type="hidden" name="id" id="id" value="<?= $akun['id']; ?>" autocomplete="off" required>
          <!-- Jenis Kelamin -->
          <div class="box-header with-border">
            <label for="status">Status Sebagai</label>
            <select name="status" id="status" class="form-control"  style="border-radius: 5px;">
              <option value="1">Admin</option>
              <option value="2">User</option>
            </select>
          </div>
          <!-- Password -->
          <div class="box-header with-border">
            <label for="pass">Password</label>
            <input type="password" class="form-control" name="pass" style="border-radius: 5px;" autocomplete="off">
          </div>
          <!-- /.form group -->
          <button type="submit" class="btn btn-primary" style="width: 120px; margin: 10px;">Simpan</i></button>
        </form>
      </div>
      <!-- /.box -->

    </section>
	<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->