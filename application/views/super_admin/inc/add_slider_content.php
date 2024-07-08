<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Slider</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Create Slider</li>
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
                            <a href="<?= base_url() ?>super_admin/slider_list/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                                <i class="fas fa-pencil"></i>Slider List
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <form action="<?= base_url() ?>super_admin/add_slider" method="post" enctype="multipart/form-data">
                    <div class="col-md-12">

                        <div class="card">

                            <div class="card-header">
                                <h5 class="modal-title" id="exampleModalform">New Slider</h5>
                            </div>
                            <div class="card-body">

                                <div class="modal-body">
                                    <?php

                                    if($this->session->flashdata('message')) {
                                        $message = $this->session->flashdata('message');
                                        ?>
                                        <div class="text-success"><?php echo $this->session->flashdata('message');  ?></div>
                                        <?php
                                    }

                                    ?>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-1" class="control-label">Slider Title
                                                </label>
                                                <input type="text" class="form-control" id="field-1" name="slider_title" required="">

                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="field-2" class="control-label">Slider Category</label>
                                                <input type="text" class="form-control" id="field-2" name="slider_category" >
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-6" class="control-label">Slider Image</label>
                                                <input type="file" class="form-control" id="field-6" name="slider_image" required="">
                                                <small>please upload width 950px height 350px </small>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="field-3" class="control-label">Description</label>
                                                <textarea name="slider_description" class="form-control" id="" cols="10" rows="5"></textarea>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
                                    <input type="reset" value="Reset" class="btn btn-raised btn-danger">
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
