
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

		  <div class="row">
		  	<div class="col-lg-8">
		  		
		  		<form action="" method="post">
		  		  <input type="hidden" id="id" name="id" value="<?= $role['id']; ?>">
				  <div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">Role Name</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="role" name="role" value="<?= $role['role']; ?>" >
				      <?= form_error('role', '<small class="text-danger pl-2">', '</small>'); ?>
				    </div>
				  </div>

				  <!-- tombol edit -->
				  <div class="form-group row justify-content-end">
				  	<div class="col-sm-10">
				  		<button type="submit" name="edit" class="btn btn-primary">Edit</button>
				  	</div>
				  </div>
		  			
		  		</form>

		  	</div>
		  </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

