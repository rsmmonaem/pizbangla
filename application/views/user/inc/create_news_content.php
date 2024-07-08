<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">News</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Create News</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div><!-- /.content-header -->
<section class="content">
	<div class="container-fluid">
			<!-- Small boxes (Stat box) -->

				<div class="card m-b-30 m-t-30">

					<div class="card-body">
						<div class="btn-group">
							<div>
							<a href="<?= base_url() ?>super_admin/news_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
									<i class="fas fa-pencil"></i>News List
								</a>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					
					<form action="<?= base_url() ?>super_admin/create_news" method="post" enctype="multipart/form-data">
					<div class="col-md-12">

						<div class="card">
							<div class="card-body">
								<div class="">
									<h5 class="modal-title" id="exampleModalform">Create News</h5>
								</div>
                                
                                <?php if ($this->session->flashdata('message')!=null) {
                                    echo "<br><div class='alert alert-success alert-dismissible fade show' role='alert'>"
                                        .$this->session->flashdata('message')."<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                <span aria-hidden='true'>&times;</span>
                                </button> </div>";
                                } ?>

								<div class="modal-body">
									<div class="row">

										<div class="col-md-12">
											<div class="form-group">
												<label for="field-1" class="control-label">News Title</label>
												<input type="text" class="form-control" id="field-1" name="news_title" required="">
											</div>
										</div>
                                        
										<div class="col-md-12">
											<div class="form-group">
												<label for="field-6" class="control-label">News Image</label>
												<input type="file" class="form-control" id="field-6" name="news_image" required="">
											</div>
										</div>

										<div class="col-md-12">
											<div class="form-group">
												<label for="field-6" class="control-label">News Description</label>
												<textarea name="news_description" id="summernote" class="form-control" cols="30" rows="10"></textarea>
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
			<!-- /.row -->

			<!-- /.row (main row) -->
	</div><!-- /.container-fluid -->
</section>

</div>
