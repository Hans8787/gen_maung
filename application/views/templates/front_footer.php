
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2><span>Gen</span>Maung</h2>
                </div>

                <p>PEMERINTAH PROVINSI JAWA BARAT<br>DINAS PENDIDIKAN<br><strong>SMK NEGERI 1 JAMBLANG</strong><br>Jl. Nyi Mas Rara Kerta Sitiwinangun Jamblang<br>Kab. Cirebon - 45157</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="https://www.facebook.com/smkjamblang" tabindex><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://www.instagram.com/osissmkn1jamblang/" tabindex><i class="fa fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <p>
                  OSIS adalah organisasi intra sekolah yang selalu ada di di setiap sekolah tingkat menengah, yang menaungi setiap organisasi yang ada dibawahnya.
                </p>
                <div class="footer-contacts">
                  <p><span>WA:</span> +62 896 2213 5384</p>
                  <p><span>Email:</span> smknjamblang73@gmail.com</p>
                  <p><span>Jam Kerja:</span> 7am-3pm</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Galeri</h4>
                <?php foreach ($foto_footer as $f) : ?>
                  <div class="flicker-img">
                    <a href="foto.php"><img src="<?= base_url(); ?><?= $f["file"]; ?>" style="height: 90px;"></a>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>OSIS SMKN 1 JAMBLANG</strong> 2018 - <?= date('Y'); ?>
              </p>
            </div>
            <div class="credits">
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eBusiness
              -->
              Designed by <a href="https://www.facebook.com/farhan.almoza">Gen Maung</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?= base_url(); ?>assets/lib/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?= base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>assets/lib/venobox/venobox.min.js"></script>
  <script src="<?= base_url(); ?>assets/lib/knob/jquery.knob.js"></script>
  <script src="<?= base_url(); ?>assets/lib/wow/wow.min.js"></script>
  <script src="<?= base_url(); ?>assets/lib/parallax/parallax.js"></script>
  <script src="<?= base_url(); ?>assets/lib/easing/easing.min.js"></script>
  <script src="<?= base_url(); ?>assets/lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="<?= base_url(); ?>assets/lib/appear/jquery.appear.js"></script>
  <script src="<?= base_url(); ?>assets/lib/isotope/isotope.pkgd.min.js"></script>

  <script src="<?= base_url(); ?>assets/js/main.js"></script>
</body>

</html>