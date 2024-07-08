<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">User Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card m-b-30">

                <div class="card-body">
                    <div class="btn-group">
                        <div>
                            <a href="<?= base_url() ?>super_admin/user_modification_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                                <i class="fas fa-pencil"></i>User List
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <form action="<?= base_url() ?>super_admin/save_user" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <h5 class="modal-title" id="exampleModalform">Create News</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Full Name</label>
                                                <input type="text" class="form-control" id="field-1" name="full_name"  required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">User Name</label>
                                                <input type="text" class="form-control" id="field-1" name="user_name"  required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Password</label>
                                                <input type="text" class="form-control" id="field-1" name="pass_word"  required="">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">User Type</label>
                                                <select class="form-control" name="user_type" id="branch_dropdown" required="">
                                                    <option value="" selected="" disabled="" hidden="">Select Here</option>
                                                    <option value="super_admin"  >Super Admin</option>
                                                    <option value="institute_admin"  >Institute Admin</option>
                                                    <option value="deo_admin"  >DEO Admin</option>
                                                    <option value="trainee"    >Trainee</option>

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Status</label>
                                                <select class="form-control" name="status" id="branch_dropdown" required="">
                                                    <option value="" selected="" disabled="" hidden="">Select Here</option>
                                                    <option value="ENABLE"  >Enable</option>
                                                    <option value="DISABLE"  >Disable</option>
                                                </select>
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
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>

</div>
