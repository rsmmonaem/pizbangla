
<?php 
// Side Bar Info show			
$user_name = $this->session->userdata('user_name');
$user_info = $this->umm->get_user_modification_id('admin_user',$user_name);

?>


<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url() ?>deo_admin" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">TMS</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?=$user_info->full_name?></a>
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
			<ul class="nav nav-pills nav-sidebar flex-column pr-5" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url() ?>deo_admin" class="nav-link">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class=""></i>
						</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>deo_admin/trainee_list" class="nav-link">
					<i class="nav-icon fas fa-users"></i>
							<p>Trainee List </p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>deo_admin/step_trainee" class="nav-link">
					<i class="nav-icon fas fa-user-edit"></i>
							<p>Online Application</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url() ?>deo_admin/certificate" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
                        <p>Certificate</p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url() ?>deo_admin/create_news " class="nav-link">
						<i class="nav-icon far fa-newspaper"></i>
							<p> Add News</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>deo_admin/add_notice" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
							<p> Add Notice</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>deo_admin/edit_profile" class="nav-link">
						<i class="nav-icon fas fa-user-cog"></i>
							<p> Profile Update</p>
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
