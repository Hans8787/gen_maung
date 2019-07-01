  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2">Daftar Berita</h1>
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

  <div class="blog-page area-padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="page-head-blog row">
            <div class="col">
              <!-- search option start -->
              <form action="<?= base_url('berita') ?>" method="post">
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Cari..." name="keyword" autocomplete="off">
                  <div class="input-group-append">
                    <input class="btn btn-primary" type="submit" name="submit">
                  </div>
                </div>
              </form>
              <!-- search option end -->
            </div>

            <div class="single-blog-page mt-5">
              <!-- recent start -->
              <div class="left-blog">
                <h4>Berita Lain</h4>
                <div class="recent-post">
                  <!-- start single post -->
                  <?php $i = 1; ?>
                  <?php foreach ($kegiatan_lain as $ev) : ?>
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="<?= base_url(); ?>berita/baca/<?= $ev['slug'] ?>">
											     <img src="<?= base_url(); ?><?= $ev["cover"]; ?>" alt="">
												</a>
                      </div>
                      <div class="pst-content">
                        <p><a href="<?= base_url(); ?>berita/baca/<?= $ev['slug'] ?>" style="font-size: 20px;"> <?= $ev["judul"]; ?></a></p>
                      </div>
                    </div>
                  <?php $i++; $i <= 4; ?>
                  <?php endforeach; ?>
                  <!-- End single post -->
                </div>
              </div>
              <!-- recent end -->
            </div>
          </div>
        </div>
        <!-- End left sidebar -->
        <!-- Start single blog -->
        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <?php if(empty($kegiatan)) : ?>
              <div class="alert alert-danger" role="alert">
                berita tidak ditemukan!
              </div>
            <?php endif; ?>  
            <?php foreach($kegiatan as $ev) : ?>
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="single-blog">
                  <div class="single-blog-img">
                    <a href="<?= base_url(); ?>berita/baca/<?= $ev['slug'] ?>">
  											<img src="<?= base_url(); ?><?= $ev["cover"]; ?>" alt="">
  										</a>
                  </div>
                  <div class="blog-meta">
                    <span class="author-meta" style="margin-right: 10px;">
                      <i class="fa fa-user"></i><?= $ev["creator"] ?>
                    </span>
                    <span class="date-type">
											<i class="fa fa-calendar"></i><?= $ev["tanggal"]; ?>
										</span>
                  </div>
                  <div class="blog-text" style="height: 189px; overflow: hidden;">
                    <h4>
											<a href="<?= base_url(); ?>berita/baca/<?= $ev['slug'] ?>"><?= $ev["judul"]; ?></a>
										</h4>
                    <p><?= $ev["content"]; ?></p>
                  </div>
                  <span>
										<a href="<?= base_url(); ?>berita/baca/<?= $ev['slug'] ?>" class="ready-btn">Baca</a>
									</span>
                </div>
              </div>
            <?php endforeach; ?>
            <!-- End single blog -->

            <?= $this->pagination->create_links(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->

  <div class="clearfix"></div>