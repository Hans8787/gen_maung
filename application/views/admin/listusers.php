
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
		  
		  <!-- tabel list user -->
		  <div class="row">
		  	<div class="col-lg">
		  		<?php if(validation_errors()) : ?>
					<div class="alert alert-danger">
						<?= validation_errors(); ?>
					</div>
		  		<?php endif; ?>	

				<?= $this->session->flashdata('message'); ?>

		  		<table class="table table-hover">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">Name</th>
				      <th scope="col">Email</th>
				      <th scope="col">Role</th>
				      <th scope="col">Action</th>
				    </tr>
				  </thead>
				  <tbody>
				  	<?php $i = 1; ?>
				  	<?php foreach($users as $user) : ?>
				    <tr>
				      <th scope="row"><?= $i; ?></th>
				      <td><?= $user['name']; ?></td>
				      <td><?= $user['email']; ?></td>
				      <td><?= $user['role']; ?></td>
				      <td>
				      	<a href="<?= base_url(); ?>menu/editSubmenu/<?= $user['id']; ?>" class="badge badge-success">edit</a>
				      	<a href="<?= base_url(); ?>menu/hapusSm/<?= $user['id']; ?>" class="badge badge-danger" onclick="return confirm('Are you sure delete it?');">delete</a>
				      </td>
				    </tr>
				    <?php $i++; ?>
					<?php endforeach; ?>
				  </tbody>
				</table>
		  	</div>
		  </div>


        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

