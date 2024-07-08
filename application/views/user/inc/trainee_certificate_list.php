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
                        <li class="breadcrumb-item active">Add Trainee</li>
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
									<th>Institute</th>
                                    <th>Department</th>
                                    <th>Course Complete </th>
   
                                </tr>
                                </thead>
                                <tbody>
                                <?php $i = 1;
                                foreach ($histry_row as $row) : ?>
                                    <tr>
                                        <td><?= $i++ ?></td>
                                        <td><?= $row->trainee_name ?></td>
                                        <td><?= $row->trainee_nid  ?></td>
										<td><?= $row->inst_name  ?></td>
                                        <td><?= $row->dept_name  ?></td>
                                        <td>
                                            <a class="btn btn-success btn-sm" onclick="return confirm('Do you want to Approve for Certificate?');"
                                               href="<?= base_url() ?>super_admin/approve_certificate/<?= $row->trainee_id  ?>"
                                               data-placement="top" data-toggle="tooltip" data-original-title="Approve">
                                                <i class="fas fa-check"></i> Approve
                                            </a>
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
