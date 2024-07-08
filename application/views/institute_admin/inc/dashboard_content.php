<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Dashboard</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="#">Home</a></li>
						<li class="breadcrumb-item active">Dashboard</li>
					</ol>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	<!-- /.content-header -->
    <?php

    $this->db->from("trainee");
    $trainees = $this->db->count_all("trainee");

    $this->db->select('*');
    $this->db->from('trainee');
    $this->db->where('trainee_status', 'Pending');
    $pending_trainee = $this->db->count_all_results();

    $institute = $this->db->count_all("institute");
    $department = $this->db->count_all('department');
    $user = $this->db->count_all('admin_user');
    $news = $this->db->count_all('news');
    $slider = $this->db->count_all('slider');

    $this->db->select('*');
    $this->db->from('trainee');
    $this->db->where('trainee_status', 'Complete');
    $certificate = $this->db->count_all_results();
   
	$this->db->select('*');
    $this->db->from('trainee');
    $this->db->where('trainee_status', 'Complete');
    $history = $this->db->count_all_results();

    ?>

	<!-- Main content -->
	<section class="content">

		<div class="container-fluid">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-info">
						<div class="inner">
							<h3>
                                <?php echo $trainees?>
                            </h3>
							<p>Total Trainee</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-stalker"></i>
						</div>
						<a href="<?= base_url() ?>institute_admin/trainee_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-success">
						<div class="inner">
                            <h3> <?php echo $department?></h3>

							<p>Total Course</p>
						</div>
						<div class="icon">
							<i class="ion ion-document-text"></i>
						</div>
						<a href="<?= base_url() ?>institute_admin/department_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>

                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>
                                <?php echo $certificate?>
                            </h3>
                            <p>Total Certificate Provided</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <a href="<?= base_url() ?>institute_admin/certificate_list" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3>
                                <?php echo $history?>
                            </h3>
							<p>Total Trainee History</p>
						</div>
						<div class="icon">
							<i class="ion ion-person-stalker"></i>
						</div>
						<a href="<?= base_url() ?>institute_admin/trainee_history" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
			</div>

			<div class="row">
				<section class="col-lg-7 connectedSortable">
                    <div class="card">
                        <div class="card-header bg-info">
                            <h3 class="card-title ">New Trainee</h3>
                        </div>

                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width: 10px">SL</th>
                                    <th>Trainee Name</th>
                                    <th>Institute</th>
                                    <th>Department</th>
									<th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $s= 1;
                                foreach($data as $row):?>
                                <tr>
                                    <td><?= $s++; ?></td>
                                    <td><?= $row->trainee_name ?></td>
                                    <td><?= $row->inst_name ?></td>
                                    <td><?= $row->dept_name ?></td>
									<td>
											<a class="btn btn-primary btn-sm" href="<?= base_url() ?>institute_admin/trainee_details/<?= $row->trainee_id  ?>">
                                                <i class="fas fa-eye"></i>
                                            </a>
									</td>
                                </tr>
                               <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
				</section>
                <section class="col-lg-5 connectedSortable">
                    <div class="card">
                        <div class="card-header bg-success">
                            <h3 class="card-title">Pending Trainee</h3>
                        </div>

                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Institute</th>
                                    <th>Department</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php $s= 1;
                                $this->load->model('add_trainee_model', 'atm');
                                $data2['data2'] = $this->atm->get_pending_trainee_dashboard();
                                foreach($this->atm->get_pending_trainee_dashboard() as $row):?>
                                    <tr>
                                        <td><?= $s++; ?></td>
                                        <td><?= $row->trainee_name ?></td>
                                        <td><?= $row->inst_name ?></td>
                                        <td><?= $row->dept_name ?></td>
                                    </tr>
                                <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </section>
							
			</div>
			
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
