  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" style="margin-top: 100px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Info Sekolah
        <small> </small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../index.php"><i class="fa fa-home"></i> Beranda</a></li>
        <li><a href="info.php"> Info Sekolah</a></li>
        <li class="active"> Info</li>
      </ol>
    </section>

    <section class="content" style="min-height: 830px;">
      <div class="row">
        <div class="col-md-12">
          <!-- Custom Tabs -->
          <div class="nav-tabs-custom" style="min-height: 400px;">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#visi_misi" data-toggle="tab">Visi & Misi</a></li>
              <li><a href="#sambutan" data-toggle="tab">Sambutan</a></li>
              <li><a href="#sejarah" data-toggle="tab">Sejarah Sekolah</a></li>
              <li><a href="#struktur" data-toggle="tab">Struktur</a></li>
              <li><a href="#alamat" data-toggle="tab">Alamat & Kontak</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="visi_misi">
                <b>Visi</b><br>
                <?= $info[0]["visi"]; ?><br><br><br>
                <b>Misi</b><br>
                <?= $info[0]["misi"]; ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="sambutan">
                <?= $info[0]["sambutan"]; ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="sejarah">
                <b>Sejarah SMK Negeri 1 Jamblang</b><br><br>
                <?= $info[0]["sejarah"]; ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="struktur">
                <b>Struktur Organisasi</b><br><br>
                <?= $info[0]["struktur"]; ?>
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="alamat">
                <b>Alamat</b><br>
                <?= $info[0]["alamat"]; ?><br><br>
                <b>Kontak</b><br>
                <?= $info[0]["kontak"]; ?>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- nav-tabs-custom -->
        </div>
      </div>
    </div>
  </section>
  <!-- /.content-wrapper -->