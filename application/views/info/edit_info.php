  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Info
        <small>Berikan info yang bermanfaat untuk pembaca</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="info.php"> Info Sekolah</a></li>
        <li class="active"> Edit Info</li>
      </ol>
    </section>
    <section class="content" style="min-height: 830px;">
    <form action="edit_info.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" id="id" value="<?= $info[0]['id']; ?>">
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#visi_misi" data-toggle="tab">Visi & Misi</a></li>
              <li><a href="#sambutan" data-toggle="tab">Sambutan</a></li>
              <li><a href="#sejarah" data-toggle="tab">Sejarah Sekolah</a></li>
              <li><a href="#struktur" data-toggle="tab">Struktur</a></li>
              <li><a href="#alamat" data-toggle="tab">Alamat & Kontak</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="visi_misi">
                <div class="form-group">
                  <label>Visi</label><br>
                  <textarea class="form-control" name="visi" rows="10"><?= $info[0]["visi"]; ?></textarea>
                </div><br><br>
                <div class="form-group">
                  <label>Misi</label><br>
                  <textarea class="form-control" name="misi" rows="10"><?= $info[0]["misi"]; ?></textarea>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="sambutan">
                <div class="form-group">
                  <label>Sambutan</label><br>
                  <textarea class="form-control" name="sambutan" rows="10"><?= $info[0]["sambutan"]; ?></textarea>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="sejarah">
                <div class="form-group">
                  <label>Sejarah SMK Negeri 1 Jamblang</label><br>
                  <textarea class="form-control" name="sejarah" rows="38"><?= $info[0]["sejarah"]; ?></textarea>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="struktur">
                <div class="form-group">
                  <label>Struktur Organisasi</label><br>
                  <textarea class="form-control" name="struktur" rows="10"><?= $info[0]["struktur"]; ?></textarea>
                </div>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="alamat">
                <div class="form-group">
                  <label>Alamat</label><br>
                  <textarea class="form-control" name="alamat" rows="10"><?= $info[0]["alamat"]; ?></textarea>
                </div><br><br>
                <div class="form-group">
                  <label>Kontak</label><br>
                  <textarea class="form-control" name="kontak" rows="10"><?= $info[0]["kontak"]; ?></textarea>
                </div>
              </div>
              <button type="submit" class="btn btn-primary" style="width: 120px; margin: 10px;">Ubah <i class="fa fa-send"></i></button>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
    </form>
    </section>
  </div>
  <!-- /.content-wrapper -->