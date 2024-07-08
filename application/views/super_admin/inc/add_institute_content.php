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
                        <li class="breadcrumb-item active">Create Institute</li>
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
                            <a href="<?= base_url() ?>super_admin/institute_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Institute List">
                                <i class="fas fa-pencil"></i>Institute List
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <form action="<?= base_url() ?>super_admin/add_institute" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">
<input value="<?= random_int(100000, 999999); ?>" type="hidden" name="user_id">
                        <div class="card">
                            <div class="card-body">
                                <div class="">
                                    <h5 class="modal-title" id="exampleModalform">New institute</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Institute Name</label>
                                                <input type="text" class="form-control" id="field-1" name="inst_name" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Institute EIIN</label>
                                                
                                                <input type="number" class="form-control" id="field-2" name="inst_eiin" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Institute Founded Date</label>
                                                <input type="date" class="form-control" id="field-3" name="inst_founded" max="2023-06-19" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-4" class="control-label">Institute Phone Number</label>
                                                <input type="tel" class="form-control" id="field1" name="inst_contact" required="">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-5" class="control-label">Institute Board</label>
                                                <select class="form-control col-md-12 col-xs-12" name="inst_board" id="add_religion" required="">
                                                    <option value=""  >--Select--</option>
                                                    <option value="Islam">BTEB</option>
                                                </select>
												
                                                
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Institute Logo</label>
                                                <input type="file" class="form-control" id="field-6" name="inst_logo" required="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-3 col-xs-12">
                                            <div class="item form-group">
                                                <label for="health_condition">Institute Username</label>
                                                <input class="form-control col-md-12 col-xs-12" value="" name="inst_username" id="result"  type="tel" readonly="readonly">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-3 col-xs-12">
                                            <div class="item form-group">
                                                <label for="health_condition">Institute Password</label>
                                                <input class="form-control col-md-12 col-xs-12"  value="<?= random_int(100000, 999999); ?>" name="inst_password" type="text" readonly="readonly" >
                                                <div class="help-block"></div>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <input type="reset" class="btn btn-raised btn-danger" value="Reset">
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js">
    </script>
