<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Message List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Message List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Message</h4>
                        </div>
                        <div class="card-body">

                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Message Subject</th>
                                    <th>Sender Name</th>
                                    <th>Email</th>
                                    <th>Message Description</th>
                                    <th>Date</th>
                                    <th>Details</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $i = 1;
                                foreach ($data as $row):?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= character_limiter( $row->ctm_subject, 20) ?></td>
                                        <td><?=$row->ctm_name?></td>
                                        <td><?=$row->ctm_email?></td>
                                        <td><?= character_limiter( $row->ctm_description, 30) ?></td>
                                        <td><?= date("d-m-Y", strtotime($row->ctm_date)) ?></td>
                                        <td>
                                            <button type="button" class="btn btn-success btn-round" data-toggle="modal" data-target="#modal-lg<?=$row->ctm_id  ?>">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                            <div class="modal fade" id="modal-lg<?=$row->ctm_id  ?>">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Message Details</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered mb-0">
                                                                    <thead>

                                                                    </thead>
                                                                    <tbody>
                                                                    <tr>
                                                                        <td width="30%">মেসেজদাতার নাম</td>
                                                                        <td><?= $row->ctm_name ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মেসেজদাতার ইমেল</td>
                                                                        <td><?= $row->ctm_email ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মেসেজের বিষয় </td>
                                                                        <td><?= $row->ctm_subject ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">বিস্তারিত</td>
                                                                        <td><?= $row->ctm_description ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td width="30%">মেসেজ প্রদানের তারিখ</td>
                                                                        <td><?= $row->ctm_date ?></td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer justify-content-between">
                                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>

                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div>
            <!-- /.row -->

            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
</div>
