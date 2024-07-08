<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Projects</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>super_admin">Home</a></li>
                        <li class="breadcrumb-item active">Project List</li>
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
                            <a href="<?= base_url() ?>super_admin/add_project/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
                                <i class="fas fa-pencil"></i>Create Project
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Project Image</th>
                                    <th>Title</th>
                                    <th>Post Type</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <?php
                                    $num = 1;
                                        foreach ($data as $row): ?>
                                    <td><?= $num++?></td>
                                    <td><img src="<?= base_url()?>uploads/project/<?=$row->project_image?>" alt="" class="img-fluid" width="100px"></td>
                                    <td><?= $row->project_name?></td>
                                    <td><?php
                                        if ($row->project_type == 1) {
                                            echo "Project Details";
                                        } elseif ($row->project_type == 2) {
                                            echo "Design of Gas Plant";
                                        } elseif ($row->project_type == 3) {
                                            echo "Achievements";
                                        } elseif ($row->project_type == 4) {
                                            echo "Project Organogram";
                                        } elseif ($row->project_type == 5) {
                                            echo "Project Area";
                                        } elseif ($row->project_type == 6) {
                                            echo "Project Program Schedule";
                                        }else {
                                            echo "Unknown";
                                        }
                                        ?></td>
                                    <td><?= character_limiter($row->project_description, 10)?></td>
                                   <td>
                                       <a href="<?= base_url()?>super_admin/edit_project/<?= $row->project_id?>" class="btn btn-primary"><i class="fa fa-pen"></i> Edit</a>
                                       <a href="<?= base_url()?>super_admin/project_delete/<?= $row->project_id?>" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
                                   </td>

                                </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div> <!-- end col -->
            </div> <!-- end row -->

        </div><!-- /.container-fluid -->
    </section>

</div>





