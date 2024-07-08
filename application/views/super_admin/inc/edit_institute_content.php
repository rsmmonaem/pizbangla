<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Institute</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Update Institute</li>
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
                            <a href="<?= base_url() ?>super_admin/institute_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                                <i class="fas fa-pencil"></i>Institute List
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <form action="<?php echo base_url()?>super_admin/update_institute" method="post" enctype="multipart/form-data">
<input value="<?=$data->user_id?>" name="user_id"  type="hidden">
<input value="<?=$data->inst_user_id?>" type="hidden">
                    <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <h5 class="modal-title" id="exampleModalform">Update institute</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">


                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Institute Name</label>
                                                <input type="text" value="<?=$data->inst_name?>" class="form-control" id="field-1" name="inst_name" >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Institute EIIN</label>
                                                <input type="number" value="<?=$data->inst_eiin?>" class="form-control" id="field-2" name="inst_eiin" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Institute Founded Date</label>
                                                <input type="date" value="<?=$data->inst_founded?>" class="form-control" id="field-3" max="2023-06-19" name="inst_founded" >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-4" class="control-label">Institute Phone Number</label>
                                                <input type="tel" value="<?=$data->inst_contact?>" class="form-control" id="field1" name="inst_contact" >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">

											<label for="field-5" class="control-label">Institute Board</label>
                                                <select class="form-control col-md-12 col-xs-12" name="trainee_religion" id="add_religion" >
                                                    <option value=""  >--Select--</option>
                                                    <option value="Islam" <?php if ($data->inst_board == 'BTEB'){ echo 'selected';}?> >BTEB</option>
                                                </select>
                                                
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Institute Logo</label>
                                                <input type="hidden" name="old_logo" value="<?= $data->inst_logo ?>">
                                                <input type="file" class="form-control" id="field-6" name="inst_logo" >
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
												<style>.img-fluid {max-width: 100%;height: auto;width: 67%;}</style>
                                                <!-- <label for="field-6" class="control-label">Existing Institute Logo</label> -->
                                                <img class="img-fluid" src="<?= base_url() ?>uploads/institute/<?= $data->inst_logo ?>" alt="Existing Institute Logo">
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-sm-3 col-xs-12">
                                            <div class="item form-group">
                                                <label for="health_condition">Institute Username</label>
                                                <input class="form-control col-md-12 col-xs-12" value="<?=$data->user_name;  ?>" id="result" name="inst_username"  type="number" readonly="readonly">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-3 col-xs-12">
                                            <div class="item form-group">
                                                <label for="health_condition">Institute Password</label>
                                                <input class="form-control col-md-12 col-xs-12"  value="<?=$data->pass_word ; ?>" name="inst_password" type="text" >
                                                <div class="help-block"></div>
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
            <!-- /.row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
</div>
