<?php include "breadcrumb.php" ?>

<div class="content-wrapper">
<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">List Notice</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="<?= base_url() ?>super_admin">Home</a></li>
								<li class="breadcrumb-item active">List Notice</li>
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
						<a href="<?= base_url() ?>super_admin/add_notice/" class="btn btn-info btn-lg tooltips" data-placement="top" data-toggle="tooltip" data-original-title="Company List">
								<i class="fas fa-pencil"></i>Create Notice
							</a>
						</div>
					</div>
				</div>
			</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <?php if ($this->session->flashdata('message') == '') { ?>
                    <?= $this->session->flashdata('message') ?>
                <?php } ?>

                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Thumbnail </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($data as $row) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= $row->not_title ?></td>
                                <td><?= $row->not_category  ?></td>
                                <td><?= $row->not_description  ?></td>
                                <td> 
                                   
                                     <img style="width: 80px;" src="<?= base_url() ?>uploads/notice/<?= $row->not_thumbnail ?>">   
                                     
                                </td>
								<td class="project-actions text-right">
                                            <a class="btn btn-info btn-sm" href="<?= base_url() ?>super_admin/edit_notice/<?= $row->not_id?>">
                                                <i class="fas fa-pencil-alt"></i> Edit
                                            </a>
                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Want to delete?');" href="<?= base_url() ?>super_admin/notice_delete/<?= $row->not_id ?>" data-placement="top" data-toggle="tooltip" data-original-title="Delete">
                                                <i class="fas fa-trash"></i> Delete
                                            </a>
                                </td>
                            </tr>
                            <!-- <?php include "modal/update_zonal_office.php" ?> -->
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





