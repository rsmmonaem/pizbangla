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

<div class="card m-b-30">

    <div class="card-body">
        <div class="btn-group">
            <div>
            <a href="<?= base_url() ?>super_admin/notice_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                    <i class="fas fa-pencil"></i>Notice List
                </a>
            </div>
        </div>
    </div>
</div>

<div class="row">

                        
    <form action="<?php echo base_url('super_admin/update_notice/'.$data->not_id)?>" method="post" enctype="multipart/form-data">
    <div class="col-md-12">

        <div class="card">
            <div class="card-body">
                <div class="">
                    <h5 class="modal-title" id="exampleModalform">New notice</h5>
                </div>
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="field-1" class="control-label">Title
                                </label>
                                <input type="text" value="<?= $data->not_title ?>" class="form-control" id="field-1" name="not_title" >
                            </div>
                        </div>

						<div class="col-md-4">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Status</label>
                                                <select class="form-control" name="status" id="branch_dropdown">
                                                    <option value="">Select Here</option>
                                                    <option value="published" <?php if($data->status == "published"){echo "selected";}?>>Published</option>
                                                    <option value="unpublished" <?php if($data->status == "unpublished"){echo "selected";}?>>Unpublished</option>
                                                </select>
                                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="field-3"  class="control-label">Description</label>
                                <textarea  type="text" id="summernote" value="<?= $data->not_description ?>" class="form-control" id="field-3" name="not_description" >
                                    <?= $data->not_description ?>
                                </textarea>
                            </div>
                        </div>

                    </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-raised btn-primary ml-2">Update</button>
                </div>
            </div>
        </div>
                
           

    </div>
    </form>
</div>

</div><!-- /.container-fluid -->
</section>

</div>
