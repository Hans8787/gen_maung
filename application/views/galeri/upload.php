
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <?= $this->session->flashdata('message'); ?>
          
          <!-- Form Upload Foto -->
          <div class="row">

            <div class="col-lg">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Upload Foto</h6>
                </div>

                <div class="card-body">
                  
                  <?= form_open_multipart('galeri/uploadfoto'); ?>

                    <input type="hidden" name="creator" value="<?= $user['email']; ?>">

                    <div class="form-group row">
                      <label for="judulfoto" class="col-sm-2 col-form-label">Judul Foto</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="judulfoto" name="judulfoto">
                        <?= form_error('judulfoto', '<small class="text-danger pl-2">', '</small>'); ?>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-2">Foto</div>
                      <div class="col-sm-10">
                        <div class="row">
                          <div class="col-sm">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foto" name="foto">
                            <label class="custom-file-label" for="foto">Masukkan Foto</label>
                            <small class="text-danger p1-2"><?= $error; ?></small>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" name="created" value="<?= time(); ?>">

                    <!-- tombol edit -->
                    <div class="form-group row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Upload</button>
                      </div>
                    </div>
                      
                    </form>

                </div>
              </div>
              
            </div>

          </div>

          <!-- Form Upload Video -->
          <div class="row">

            <div class="col-lg">

              <!-- Basic Card Example -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Upload Video</h6>
                </div>

                <div class="card-body">
                  
                  <?= form_open_multipart('galeri/uploadvideo'); ?>

                    <input type="hidden" name="creator" value="<?= $user['email']; ?>">
                    <div class="form-group row">
                      <label for="judulvideo" class="col-sm-2 col-form-label">Judul Video</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="judulvideo" name="judulvideo">
                        <?= form_error('judulvideo', '<small class="text-danger pl-2">', '</small>'); ?>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="col-sm-2">Video</div>
                      <div class="col-sm-10">
                        <div class="row">
                          <div class="col-sm">
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="video" name="video">
                            <label class="custom-file-label" for="video">Masukkan Video</label>
                            <small class="text-danger p1-2"><?= $error; ?></small>
                          </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="hidden" name="created" value="<?= time(); ?>">

                    <!-- tombol edit -->
                    <div class="form-group row justify-content-end">
                      <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Upload</button>
                      </div>
                    </div>
                      
                    </form>

                </div>
              </div>
              
            </div>

          </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

