<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">Create Photo Gallery</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url() ?>super_admin">Home</a></li>
								<li class="breadcrumb-item active">Create Photo Gallery</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div><!-- /.content-header -->

        <section class="content">
        <div class="container-fluid">
			<div class="card m-b-30">

				<div class="card-body">
					<div class="btn-group">
						<div>
						<a href="<?= base_url() ?>super_admin/photo_gallery_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
								<i class="fas fa-pencil"></i>Photo Gallery List
							</a>
						</div>
					</div>
				</div>
			</div>

		<div class="row">

			<form action="<?= base_url() ?>super_admin/add_photo_gallery" method="post" enctype="multipart/form-data">


				<div class="card">
				<?php echo $this->session->flashdata('message'); ?>
					<div class="card-body">
						<div class="">
							<h5 class="modal-title" id="exampleModalform">New Gallery</h5>
						</div>
						<div class="modal-body">
							<div class="row">

										<div class="col-md-12">
											<div class="form-group">
												<label for="field-1" class="control-label">Title
												</label>
												<input type="text" class="form-control" id="field-1" name="photo_gallery_title" required="">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label for="field-2" class="control-label">Action Link</label>
												<input type="text" class="form-control" id="field-2" name="photo_gallery_action_link" >
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label for="field-3" class="control-label">Photo</label>
												<input type="file" class="form-control" id="field-6" name="photo_gallery_img" required="">

												</textarea>
											</div>
										</div>

										<div class="col-md-6">
											<div class="form-group">
												<label for="field-6" class="control-label">Date</label>
												<input type="date" class="form-control" id="field-6" name="date" required="">
											</div>
										</div>


							</div>

						</div>
						<div class="modal-footer">
						<input type="reset"  class="btn btn-raised btn-danger" data-dismiss="modal" rest>
						<button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
						</div>
					</div>
				</div>



			</div>
			</form>
		</div>
			<!-- /.row (main row) -->
			</div><!-- /.container-fluid -->
</section>

</div>
