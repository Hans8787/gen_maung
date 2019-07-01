  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="assets_front/img/slider/1.jpg" alt="" title="#slider-direction-1" />
        <img src="assets_front/img/slider/2.jpg" alt="" title="#slider-direction-2" />
        <img src="assets_front/img/slider/3.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Organisasi Siswa Intra Sekolah</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">SMK NEGERI 1 JAMBLANG</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Organisasi Siswa Intra Sekolah</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">SMK NEGERI 1 JAMBLANG</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <h2 class="title1">Organisasi Siswa Intra Sekolah</h2>
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  <h1 class="title2">SMK NEGERI 1 JAMBLANG</h1>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->

  <!-- Info area start -->
  <div class="faq-area area-padding" id="info">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Info Sekolah</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="tab-menu">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
              <li class="active">
                <a href="#p-view-1" role="tab" data-toggle="tab">Visi & Misi</a>
              </li>
              <li>
                <a href="#p-view-2" role="tab" data-toggle="tab">Sambutan</a>
              </li>
              <li>
                <a href="#p-view-3" role="tab" data-toggle="tab">Sejarah Sekolah</a>
              </li>
            </ul>
          </div>
          <div class="tab-content" style="min-height: 600px;">
            <div class="tab-pane active" id="p-view-1">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Visi </h4>
                  <p><?= $info[0]["visi"]; ?></p>
                  <h4>Misi</h4>
                  <p><?= $info[0]["misi"]; ?></p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-2">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Sambutan</h4>
                  <p><?= $info[0]["sambutan"]; ?></p>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="p-view-3">
              <div class="tab-inner">
                <div class="event-content head-team">
                  <h4>Sejarah SMK Negeri 1 Jamblang</h4>
                  <p><?= $info[0]["sejarah"]; ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- end Row -->
    </div>
  </div>
  <!-- End Info Area -->

  <!-- Start Event Area -->
  <div id="blog" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Berita Terbaru</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <?php foreach ( $kegiatan_baru as $row ) : ?>
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12" style="margin-bottom: 10px;">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
										<img src="<?= $row["cover"]; ?>" alt="" style="height: 245px; width: 400px;">
									</a>
                </div>
                <div class="blog-meta">
                  <span class="date-type">
										<i class="fa fa-calendar"></i><?= $row["tanggal"]; ?>
									</span>
                </div>
                <div class="blog-text" style="height: 150px; overflow: hidden;">
                  <h4>
                    <a href="blog.html"></i><?= $row["judul"]; ?></a>
									</h4>
                  <p><?= $row["content"]; ?></p>
                </div>
                <span>
									<a href="read-event.php?id=<?= $row["id"]; ?>" class="ready-btn">Baca</a>
								</span>
              </div>
              <!-- Start single blog -->
            </div>
          <?php endforeach; ?>
          <!-- End Left Blog-->
        </div>
        <div class="blog-meta">
          <span>
            <a href="<?= base_url(); ?>berita" class="ready-btn pull-right" style="background-color: #3ec1d5">Tampilkan Lebih Banyak</a>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog -->