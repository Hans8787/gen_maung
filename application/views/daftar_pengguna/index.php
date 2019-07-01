  <style>
    .aksi {
      width: 74px;
      height: 25px;
      float: left;
      margin-left: 5px;
      border-radius: 5px;
      padding: 3px 7px;
    }

    .aksi a {
      color: white;
    }
  </style>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="min-height: 916px; margin-top: 100px;">
    <!-- Content Header -->
    <section class="content-header">
      <h1>
        Daftar Pengguna
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?= base_url(); ?>"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">List Users</li>
      </ol>
    </section>

    <section class="content" style="min-height: 810px;">
      <div class="row">
        <div class="col-xs-12">
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">List Users</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                <div class="row"><div class="col-sm-12"><div class="table-responsive"><table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                  <!-- Table Header -->
                <tr role="row">
                  <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 5px;">No</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 200px;">Username</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 223px;">Nama Pengguna</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 100px;">Status</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 250px;">Created</th>
                  <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 154px;">Aksi</th>
                </tr>
                </thead>
  
                <!-- Isi Table Daftar Event -->
                <tbody>
                <?php $i = 1; ?>
                <?php foreach ( $daftar_pengguna as $row ) : ?>
                <tr>
                  <td><?= $i;  ?></td>
                  <td><?= $row["username"]; ?></td>
                  <td><?= $row["nama"]; ?></td>
                  <td>
                    <?php if($row["role"] == 2) : ?>
                      User
                    <?php else : ?>
                      Admin
                    <?php endif; ?>
                  </td>
                  <td><?= $row["created"]; ?></td>
                  <!-- aksi -->
                  <td>
                    <div class="aksi bg-yellow">
                      <a href="<?= base_url(); ?>daftar_pengguna/edit/<?= $row["username"]; ?>"><i class="menu-icon fa fa-edit fa-lg"></i> Edit</a>
                    </div>
                    <div class="aksi bg-red">
                      <a href="hapus_akun.php?id=<?= $row["id"]; ?>" onclick="return confirm('Hapus?');"><i class="menu-icon fa fa-trash-o fa-lg"></i> Hapus</a>
                    </div>
                  </td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
                </tbody></table></div></div></div>
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