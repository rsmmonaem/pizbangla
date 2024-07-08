
<?php 
// Side Bar Info show		
$user_name = $this->session->userdata('user_name');	
$inst_user_id = $this->session->userdata('user_id');
$user_info = $this->umm->get_inst_user_modification_id('institute',$inst_user_id);
$admin_info = $this->umm->get_user_modification_id('admin_user',$user_name );

$full_name = "$admin_info->full_name";
$words = explode(" ", $full_name);
$firstTwoWords = array_slice($words, 0, 2);
?>
			

<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Institute</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">

				<img src="<?= base_url() ?>uploads/institute/<?=$user_info->inst_logo?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?=implode(" ", $firstTwoWords);?></a>
			</div>
		</div>

		<!-- SidebarSearch Form
		<div class="form-inline">
			<div class="input-group" data-widget="sidebar-search">
				<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
				<div class="input-group-append">
					<button class="btn btn-sidebar">
						<i class="fas fa-search fa-fw"></i>
					</button>
				</div>
			</div>
		</div> -->

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url() ?>institute_admin" class="nav-link <?php if($this->uri->segment(2)=="institute_admin_admin"){echo 'class="active"';}?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class=""></i>
						</p>
					</a>
				</li>
				<!-- <li class="nav-item">
					<a href="<?= base_url() ?>institute_admin_/add_trainee" class="nav-link">
					<i class="fas fa-user-plus fa-lg"></i>
							<p>Trainee Registration </p>
					</a>
				</li> -->
				<li class="nav-item">
					<a href="<?= base_url() ?>institute_admin/add_department" class="nav-link">
                        <i class="nav-icon fas fa-paper-plane"></i>
						<p>
						Department
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url() ?>institute_admin/add_department" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Add Department</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url() ?>institute_admin/department_list" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Department List</p>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>institute_admin/trainee_list" class="nav-link">
					<i class="nav-icon fas fa-users"></i>
							<p>Trainee List </p>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="<?= base_url() ?>institute_admin/trainee_history" class="nav-link">
					<i class="nav-icon fas fa-table"></i>
							<p>Trainee History </p>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="<?= base_url() ?>institute_admin/certificate_list" class="nav-link">
						<i class="nav-icon fas fa-certificate"></i>
							<p>Certificate List </p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url() ?>institute_admin/step_trainee" class="nav-link">
						<i class="nav-icon fas fa-user-edit"></i>
							<p>Online Application  </p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url() ?>institute_admin/edit_profile" class="nav-link">
						<i class="nav-icon fas fa-tasks "></i>
							<p> Profile setup  </p>
					</a>
				</li>

				
				
			</ul>
		</nav>
		<!-- /.sidebar-menu -->
	</div>
	<!-- /.sidebar -->
</aside>
<style>
</style>

