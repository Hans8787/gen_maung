
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

          <div class="row justify-content-center">
		  	<div class="col-lg-10">

		  		<?= $this->session->flashdata('message'); ?>
		  		
		  		<?= form_open_multipart('berita/inputberita'); ?>
				  <div class="form-group row">
				    <label for="judul" class="col-sm-2 col-form-label">Judul Berita</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="judul" name="judul" placeholder="Judul berita" value="<?= set_value('judul') ?>">
				      <?= form_error('judul', '<small class="text-danger pl-2">', '</small>'); ?>
				    </div>
				  </div>
				  <input type="hidden" name="creator" id="creator" value="<?= $user['name']; ?>">
				  <input type="hidden" name="tanggal" id="tanggal" value="<?= time(); ?>">
				  <div class="form-group row">
				    <label for="tempat" class="col-sm-2 col-form-label">Tempat</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" value="<?= set_value('tempat') ?>">
				      <?= form_error('tempat', '<small class="text-danger pl-2">', '</small>'); ?>
				    </div>
				  </div>
				  <div class="form-group row">
				    <div class="col-sm-2">Picture</div>
				    <div class="col-sm-10">
				    	<div class="row">
				    		<div class="col-sm">
				    			<div class="custom-file">
								  <input type="file" class="custom-file-input" id="cover" name="cover">
								  <label class="custom-file-label" for="cover">Choose file</label>
						  		  <small class="text-danger p1-2"><?= $error; ?></small>
								</div>
				    		</div>
				    	</div>
				    </div>
				  </div>
				  <div class="form-group row">
				  	<label for="content" class="col-sm-2 col-form-label">Content</label>
				  	<div class="col-sm">
				  	  <textarea name="content" id="ckeditor" cols="30" rows="10" class="ckeditor"><?= set_value('content') ?></textarea>
				  	  <?= form_error('content', '<small class="text-danger pl-2">', '</small>'); ?>
				  	</div>
				  </div>

				  <!-- tombol edit -->
				  <div class="form-group row justify-content-end">
				  	<div class="col-sm-10">
				  		<button type="submit" class="btn btn-primary">Publikasikan</button>
				  	</div>
				  </div>
		  			
		  		</form>

		  	</div>
		  </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

