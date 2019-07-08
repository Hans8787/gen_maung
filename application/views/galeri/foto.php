
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
                  <h6 class="m-0 font-weight-bold text-primary">Galeri Foto</h6>
                </div>

                <div class="card-body">
				  <div class="row">
				  	<?php foreach($foto as $f) : ?>
				  	<div class="col-sm-2 mb-2">
				  		<img src="<?= base_url('assets/foto/') . $f['foto']; ?>" alt="" class="img-thumbnail">
				  		<!-- <small class="text-muted p1-2">Post by <?= $f['creator']; ?></small> -->

				  		<?php if($user['role_id'] == 1) : ?>
				  		<a href="<?= base_url(); ?>foto/hapus/<?= $f['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure delete it?');">delete</a>
				  		<?php endif; ?>
				  	</div>
				  	<?php endforeach; ?>
				  </div>

                </div>

                <!-- Navigasi Pagination Foto -->
		        <div style="margin-right: 20px;">
		          <?= $this->pagination->create_links(); ?>
		        </div>

              </div>

            </div>

          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

