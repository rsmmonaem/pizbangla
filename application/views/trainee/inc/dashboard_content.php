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
						<a  class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-warning">
						<div class="inner">
							<h3> <?php echo $institute?></h3>


							<p>Total Institute</p>
						</div>
						<div class="icon">
							<i class="ion ion-ios-home"></i>
						</div>
						<a class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- ./col -->
				<div class="col-lg-3 col-6">
					<!-- small box -->
					<div class="small-box bg-danger">
						<div class="inner">
                            <h3> <?php echo $department?></h3>

							<p>Total Course</p>
						</div>
						<div class="icon">
							<i class="ion ion-document-text"></i>
						</div>
						<a  class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
					</div>
				</div>


                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>
                                <?php echo $certificate?>
                            </h3>
                            <p>Total Certificate Provided</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-certificate"></i>
                        </div>
                        <a  class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
				<!-- ./col -->
			</div>
		</div><!-- /.container-fluid -->
	</section>
	<!-- /.content -->
</div>
<!-- /.content-wrapper -->
