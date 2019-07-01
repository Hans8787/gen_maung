
  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Galeri Foto</h1>
              </div>
              <div class="layer3 wow zoomInUp" data-wow-duration="2s" data-wow-delay="1s">
                <h2 class="title3">SMK Negeri 1 Jamblang</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END Header -->

  <!-- Start galeri foto Area -->
  <div id="foto" class="about-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Galeri Foto</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="awesome-project-content">
          <?php foreach( $foto as $f ) : ?>
            <!-- single-awesome-project start -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-awesome-project">
                <div class="awesome-img" style="height: 255px;">
                  <a href="#"><img src="<?= base_url(); ?><?= $f["file"]; ?>" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="venobox" data-gall="myGallery" href="<?= base_url(); ?><?= $f["file"]; ?>">
                        <h4 style="margin-top: -80px;"><?= $f["capt"]; ?></h4>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- single-awesome-project end -->
          <?php endforeach; ?>
        </div>
      </div>
      
      <!-- link pagination -->
      <?= $this->pagination->create_links(); ?>
    </div>
  </div>
  <!-- awesome-galeri Foto end -->

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
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="read-event.php?id=<?= $row["id"]; ?>">
										<img src="<?= base_url(); ?><?= $row["cover"]; ?>" alt="" style="height: 255px;">
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