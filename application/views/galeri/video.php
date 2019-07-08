
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
                  <h6 class="m-0 font-weight-bold text-primary">Galeri Video</h6>
                </div>

                <div class="card-body">
				  <div class="row">
				  	<?php foreach($video as $v) : ?>
				  	<div class="col-sm-4 embed-responsive embed-responsive-21by9">
				  		<video controls>
				  			<source src="<?= base_url('assets/video/') . $v['video']; ?>" type="video/mp4">
				  		</video>
				  		<!-- <small class="text-muted p1-2">Post by <?= $v['creator']; ?></small> -->

				  		<?php if($user['role_id'] == 1) : ?>
				  		  <!-- <a href="<?= base_url(); ?>video/hapus/<?= $v['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure delete it?');">delete</a> -->
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

