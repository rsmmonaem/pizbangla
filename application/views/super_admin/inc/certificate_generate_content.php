<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Trainee</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Certificate Generate</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Generate Certificate</h2>
                    </div>
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Nid</th>
                                <th>Institute</th>
                                <th>Department</th>
                                <th>QR Code Generate </th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            foreach ($data as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row->trainee_name ?></td>
                                    <td><?= $row->trainee_nid  ?></td>
                                    <td><?= $row->inst_name  ?></td>
                                    <td><?= $row->dept_name  ?></td>
                                    <td class="d-flex mr-1">
                                        <?php if ($row->trainee_qr_code == null):?>
                                            <button type="button" class="btn btn-success btn-round m-1" data-toggle="modal" data-target="#modal-lg<?=$row->trainee_id  ?>">
                                                <i class="fa fa-code"></i> Generate
                                            </button>
                                            <div class="modal fade" id="modal-lg<?=$row->trainee_id  ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Generate Link</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="input-group mb-3">
                                                                <textarea id="text" class="form-control" readonly><?= base_url("home/trainee_certificate/").$row->trainee_id;?></textarea>

                                                                <div class="input-group-append">
                                                                    <button class="btn btn-outline-primary"  onclick="copyToClipBoard()"> Copy </button>
                                                                </div>
                                                            </div>
                                                            <hr>
                                                            <h2 class="text-center">Generate QR Code</h2>
                                                            <form action="<?= base_url();?>super_admin/add_qr_data/<?= $row->trainee_id  ?>" method="post" enctype="multipart/form-data">
                                                                <div class="input-group mb-3">
                                                                    <input type="text" name="trainee_qr_code" class="form-control" required="required" placeholder="Please insert copied link">
                                                                    <input type="hidden" name="trainee_id" value="<?= $row->trainee_id  ?>">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-outline-primary" type="submit"  >Submit</button>
                                                                    </div>
                                                                </div>
                                                            </form>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>
                                        <?php else:?>

                                        <?php endif;?>

                                    </td>


                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Completed Certificate</h2>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Nid</th>
                                <th>Institute</th>
                                <th>Department</th>
                                <th>QR Code</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;

                            foreach ($completed as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row->trainee_name ?></td>
                                    <td><?= $row->trainee_nid  ?></td>
                                    <td><?= $row->inst_name  ?></td>
                                    <td><?= $row->dept_name  ?></td>
                                    <td class="d-flex mr-1">
                                        <button type="button" class="btn btn-dark btn-round m-1" data-toggle="modal" data-target="#modal-qr<?=$row->trainee_id  ?>">
                                            <i class="fa fa-qrcode"></i>
                                        </button>
                                        <div class="modal fade" id="modal-qr<?=$row->trainee_id  ?>">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">QR Code</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body text-center">
                                                        <img src="<?= base_url() ?><?= $row->trainee_qr_code_file ?>" alt="" class="img-fluid">
                                                    </div>
                                                    <?php if($row->trainee_qr_code_file ==! ''):?>
                                                        <div class="input-group p-3">
                                                            <p id="p1" class="form-control"><?= base_url("home/trainee_certificate/$row->trainee_id");?></p>
                                                            <div class="input-group-append">
                                                                <button class="btn btn-outline-primary" type="button" onclick="copyToClipboard('#p1')" >Copy Link</button>
                                                            </div>
                                                        </div>
                                                    <?php endif;?>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                                <!-- /.modal-content -->
                                            </div>
                                            <!-- /.modal-dialog -->
                                        </div>


                                        <a class="btn btn-warning btn-round m-1" target="_blank" href="<?= base_url() ?>home/trainee_certificate/<?= $row->trainee_id   ?>"><i class="fa fa-eye" aria-hidden="true"></i></i></a>


                                    </td>


                                </tr>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

</div><!-- /.container-fluid -->
</section>
</div>


