<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Update Project</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>super_admin">Home</a></li>
                        <li class="breadcrumb-item active">Update Project</li>
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
                            <a href="<?= base_url() ?>super_admin/project_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                                <i class="fas fa-pencil"></i>Project List
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="<?= base_url('super_admin/update_project/'.$data->project_id) ?>" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="modal-title" id="exampleModalform">Update Project</h5>
                            </div>
                            <div class="card-body">

                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label"> Select Post Type
                                                </label>
                                                <select name="project_type" id="" class="form-control">
                                                    <option class="form-control">Select</option>
                                                    <option value="1" class="form-control" <?php if($data->project_type == 1){echo "selected";}?> >Project Details</option>
                                                    <option value="2" class="form-control" <?php if($data->project_type == 2){echo "selected";}?> >Design of Gas Plant</option>
                                                    <option value="3" class="form-control" <?php if($data->project_type == 3){echo "selected";}?> >Achievements</option>
                                                    <option value="4" class="form-control" <?php if($data->project_type == 4){echo "selected";}?> >Project Organogram</option>
                                                    <option value="5" class="form-control" <?php if($data->project_type == 5){echo "selected";}?> >Project Area</option>
                                                    <option value="6" class="form-control" <?php if($data->project_type == 6){echo "selected";}?> >Project Program Schedule</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label"> Title
                                                </label>
                                                <input type="text" class="form-control" id="field-1" name="project_name" value="<?= $data->project_name?>">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Photo</label>
                                                <input type="file" class="form-control" id="field-6" name="project_image" >
                                                <input type="hidden" name="old_thumbnail" value="<?= $data->project_image?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Existing Photo</label>
                                                <img src="<?= base_url()?>uploads/project/<?= $data->project_image?>" alt="" class="img-fluid">
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Description</label>
                                                <textarea name="project_description" id="summernote" cols="30" rows="10"
                                                          class="form-control"><?= $data->project_description?></textarea>
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
                    </form>
                </div>

            </div>
        </div>

    </section>
    <!-- /.row (main row) -->

    </section>

</div>
