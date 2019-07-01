
  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?= base_url(); ?>assets/img/slider/1.jpg" alt="" title="#slider-direction-1" />
        <img src="<?= base_url(); ?>assets/img/slider/2.jpg" alt="" title="#slider-direction-2" />
        <img src="<?= base_url(); ?>assets/img/slider/3.jpg" alt="" title="#slider-direction-3" />
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
  <div class="about-area area-padding" id="info">
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
          <div class="tab-content">
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

  <!-- Start galeri foto Area -->
  <div id="foto" class="portfolio-area area-padding fix">
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
          <?php foreach( $foto_footer as $f ) : ?>
            <!-- single-awesome-project start -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-awesome-project">
                <div class="awesome-img" style="height: 255px;">
                  <a href="#"><img src="<?= $f["file"]; ?>" alt="" /></a>
                  <div class="add-actions text-center">
                    <div class="project-dec">
                      <a class="venobox" data-gall="myGallery" href="<?= $f["file"]; ?>">
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
      <div>
        <span>
          <a href="<?= base_url(); ?>foto" class="ready-btn pull-right" style="background-color: #3ec1d5">Tampilkan Lebih Banyak</a>
        </span>
      </div>
    </div>
  </div>
  <!-- awesome-galeri Foto end -->

  <!-- Start galeri Video Area -->
  <div id="video" class="about-area area-padding fix">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Galeri Video</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="awesome-project-content">
          <!-- single-awesome-project start -->
          <?php foreach($video as $v) : ?>
            <div class="col-md-4 col-sm-4 col-xs-12 design development">
              <div class="single-awesome-project">
                <div class="awesome-img" style="height: 289px;">
                  <video width="320" height="240" controls style="box-shadow: 1px 1px 1px 1px;">
                    <source src="<?= $v["video"]; ?>" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
          <!-- single-awesome-project end -->
        </div>
        <div>
          <span>
            <a href="<?= base_url(); ?>video" class="ready-btn pull-right" style="background-color: #3ec1d5">Tampilkan Lebih Banyak</a>
          </span>
        </div>
      </div>
    </div>
  </div>
  <!-- awesome-galeri Video end -->

  <!-- Start Testimonials -->
  <div class="testimonials-area">
    <div class="testi-inner area-padding">
      <div class="testi-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <!-- Start testimonials Start -->
            <div class="testimonial-content text-center">
              <!-- start testimonial carousel -->
              <div class="testimonial-carousel">
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Dalam organisasi hanya terdapat seorang pemimpin.<br>
                      Tapi jiwa-jiwa pemimpin harus dimiliki oleh seluruh anggotanya.
                    </p>
                    <h6>POMJA</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Kepemimpinan dalam organisasi adalah dua hal yang tak terpisahkan.<br>
                      Organisasi melatih kepemimpinan dan kepemimpinan menjamin kelangsungan organisasi.
                    </p>
                    <h6>POMJA</h6>
                  </div>
                </div>
                <!-- End single item -->
                <div class="single-testi">
                  <div class="testi-text">
                    <p>
                      Semua posisi dalam organisasi itu penting. Jika tidak percaya, tempatkanlah orang yang tak<br>bermutu didalamnya, maka pasti seluruh bagian organisasi akan terguncang.
                    </p>
                    <h6>POMJA</h6>
                  </div>
                </div>
                <!-- End single item -->
              </div>
            </div>
            <!-- End testimonials end -->
          </div>
          <!-- End Right Feature -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Testimonials -->
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
									<img src="<?= $row["cover"]; ?>" alt="" style="height: 245px;">
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


  <!-- Start Suscrive Area -->
  <div class="suscribe-area" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
          <div class="suscribe-text text-center">
            <h3>Welcome to Our School</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Suscrive Area -->
  <!-- Start contact Area -->
  <div class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Kontak</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  WhatsApp: +62 896 2213 5384<br>
                  <span>Senin-Jumat (7am-3pm)</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: smknjamblang73@gmail.com<br>
                  <span>Web: www.osissmknjamblang.com</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Lokasi: Cirebon<br>
                  <span>Jawa Barat, Indonesia</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

          <!-- Start Google Map -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Start Map -->
            <iframe src="https://maps.google.com/maps?q=SMK%20Negeri%201%20Jamblang%2C%20Sitiwinangun%2C%20Cirebon%2C%20Jawa%20Barat&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- End Map -->
          </div>
          <!-- End Google Map -->

          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <?php if( isset($_GET["act"]) && $_GET["act"] == 'es' ) {
                echo '<div class="callout callout-success" style="margin: 5px 15px;"> 
                        <h4>Pesan Terkirim</h4>
                      </div>';
              } ?>
              <div id="errormessage" style="border: solid #09e826 1px; color: #09e826;">Saran tidak terkirim</div>
              <form action="kotak_saran.php" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" autocomplete="off" required />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email Anda" data-rule="email" data-msg="Please enter a valid email" autocomplete="off" required />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Saran" required></textarea>
                  <div class="validation"></div>
                </div>
                <div class="text-center"><button type="submit">Kirim</button></div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->