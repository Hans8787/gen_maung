
        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
          
          <div class="row">
		  	<div class="col-lg-8">
		  		
                <form action="<?= base_url('menu/editsubmenu'); ?>" method="post">
                  <input type="hidden" name="id" value="<?= $sm['id']; ?>">
                  <!-- Submenu title -->
				  <div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">Title</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="title" name="title" value="<?= $sm['title']; ?>" >
				      <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
				    </div>
				  </div>

				  <!-- Role Menu -->
				  <div class="form-group row">
				  	<label for="menu_id" class="col-sm-2 col-form-label">Select Menu</label>
				  	<div class="col-sm-6">
				  	  <select name="menu_id" id="menu_id" class="form-control">
				  		  <?php foreach ($menu as $m) : ?>
				  		  	<?php if($m['id'] == $sm['menu_id']) : ?>
				  				<option value="<?= $m['id']; ?>" selected><?= $m['menu']; ?></option>
							<?php else : ?>
								<option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
							<?php endif; ?>
				  		  <?php endforeach; ?>
				  	  </select>
				    </div>
				  </div>

				  <!-- submenu url -->
				  <div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">URL</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="url" name="url" value="<?= $sm['url']; ?>" >
				      <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
				    </div>
				  </div>

				  <!-- submenu icon -->
				  <div class="form-group row">
				    <label for="name" class="col-sm-2 col-form-label">Icon</label>
				    <div class="col-sm-6">
				      <input type="text" class="form-control" id="icon" name="icon" value="<?= $sm['icon']; ?>" >
				      <?= form_error('name', '<small class="text-danger pl-2">', '</small>'); ?>
				    </div>
				  </div>

				  <!-- is avtive -->
				  <div class="form-group row">
				  	<label for="is_active" class="col-sm-2">coba</label>
				  	<div class="form-check col-sm-6">
				  		<input type="checkbox" class="form-check-input" value="1" name="is_active" id="is_active1" checked>
				  		<label for="is_active1" class="form-check-label">
				  			Active?
				  		</label>
				  	</div>
				  </div>

				  <!-- tombol edit -->
				  <div class="form-group row justify-content-end">
				  	<div class="col-sm-10">
				  		<button type="submit" class="btn btn-primary">Edit</button>
				  	</div>
				  </div>
		  			
		  		</form>

		  	</div>
		  </div>
          

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

