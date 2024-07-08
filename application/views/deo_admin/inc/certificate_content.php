<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Trainee Certificate</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Trainee Certificate</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div><!-- /.content-header -->
    <section class="content">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Nid</th>
                                <th>Course</th>
                                <th>Status</th>
                                <th>Certificate</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 1;
                            foreach ($history_row as $row) : ?>
                                <tr>
                                    <td><?= $i++ ?></td>
                                    <td><?= $row->trainee_name ?></td>
                                    <td><?= $row->trainee_nid  ?></td>
                                    <td><?= $row->dept_name  ?></td>
                                    <td><?= $row->trainee_status  ?></td>
                                    <td>
                                        <?php if ($row->trainee_status == 'Complete'):?>
                                            <a class="btn btn-warning btn-block mt-0" target="_blank"
                                               href="<?= base_url()?>home/trainee_certificate/<?= $row->trainee_id?>">
                                                <i class="fa fa-eye"></i></a>
                                        <?php elseif($row->trainee_status == 'Active'):?>
                                            Training On Process
                                        <?php endif;?>
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
