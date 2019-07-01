  <!-- Start Bottom Header -->
  <div class="header-bg page-area">
    <div class="home-overly"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="slider-content text-center">
            <div class="header-bottom">
              <div class="layer2 wow zoomIn" data-wow-duration="1s" data-wow-delay=".4s">
                <h1 class="title2"><?= $berita["judul"] ?> </h1>
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
          <div class="page-head-blog">
            <div class="single-blog-page">
            </div>
            <div class="single-blog-page">
              <!-- recent start -->
              <div class="left-blog">
                <h4>Berita terbaru</h4>
                <div class="recent-post">
                  <!-- start single post -->
                  <?php $i = 1; ?>
                  <?php foreach ($kegiatan_lain as $ev) : ?>
                    <div class="recent-single-post">
                      <div class="post-img">
                        <a href="read-event.php?id=<?= $ev["id"]; ?>">
                          <img src="<?= base_url(); ?><?= $ev["cover"]; ?>" alt="">
                        </a>
                      </div>
                      <div class="pst-content">
                        <p><a href="read-event.php?id=<?= $ev["id"]; ?>"> <?= $ev["judul"]; ?></a></p>
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
            <div class="col-md-12 col-sm-12 col-xs-12">
              <!-- single-blog start -->
              <article class="blog-post-wrapper">
                <div class="post-thumbnail">
                  <img src="<?= base_url(); ?><?= $berita["cover"] ?>" alt="" />
                </div>
                <div class="post-information">
                  <h2><?= $berita["judul"] ?></h2>
                  <div class="entry-meta">
                    <span class="author-meta"><i class="fa fa-user"></i> <?= $berita["creator"] ?></span>
                    <span><i class="fa fa-clock-o"></i> <?= $berita["tanggal"] ?></span>
                    <!-- <span><i class="fa fa-comments-o"></i> <a href="#komen" class="page-scroll"><?= $jumlahKomen["c"]; ?> komentar</a></span> -->
                  </div>
                  <div class="entry-content">
                    <?= $berita["content"] ?>
                  </div>
                </div>
              </article>
              <div class="clear"></div>
              <div class="single-post-comments">
                <div class="comments-area">
                  <div class="comments-heading">
                    <h3>6 comments</h3>
                  </div>
                  <div class="comments-list">
                    <ul>
                      <li class="threaded-comments">
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="<?= base_url(); ?>assets_front/img/user/user-male.png" alt="post-author" style="height: 50px;">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 4:25 pm</span>
                            <a href="#">Reply</a>
                            </span>
                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                          </div>
                        </div>
                      </li>
                      <li>
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="<?= base_url(); ?>assets_front/img/user/user-male.png" alt="post-author" style="height: 50px;">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
                                <b><a href="#">admin</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 6:18 pm </span>
                            <a href="#">Reply</a>
                            </span>
                            <p>Quisque orci nibh, porta vitae sagittis sit amet, vehicula vel mauris. Aenean at justo dolor. Fusce ac sapien bibendum, scelerisque libero nec</p>
                          </div>
                        </div>
                      </li>
                      <li class="threaded-comments">
                        <div class="comments-details">
                          <div class="comments-list-img">
                            <img src="<?= base_url(); ?>assets_front/img/user/user-male.png" alt="post-author" style="height: 50px;">
                          </div>
                          <div class="comments-content-wrap">
                            <span>
                                <b><a href="#">demo</a></b>
                                Post author
                                <span class="post-time">October 6, 2014 at 7:25 pm</span>
                            <a href="#">Reply</a>
                            </span>
                            <p>Quisque semper nunc vitae erat pellentesque, ac placerat arcu consectetur</p>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="comment-respond">
                  <h3 class="comment-reply-title">Leave a Reply </h3>
                  <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                  <form action="#">
                    <div class="row">
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Name *</p>
                        <input type="text" />
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Email *</p>
                        <input type="email" />
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <p>Website</p>
                        <input type="text" />
                      </div>
                      <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                        <p>Website</p>
                        <textarea id="message-box" cols="30" rows="10"></textarea>
                        <input type="submit" value="Post Comment" />
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <!-- single-blog end -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Blog Area -->
  <div class="clearfix"></div>