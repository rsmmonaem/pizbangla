<?php
// Side Bar Info show	

$trainee_username = 924987;
$user_info = $this->umm->get_trainee_user_modification_id('trainee',$trainee_username);
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="index3.html" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">TMS</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url() ?>uploads/trainees/<?=$user_info->trainee_image?>" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?=$user_info->trainee_name ?></a>
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
					<a href="<?= base_url() ?>trainee" class="nav-link <?php if($this->uri->segment(2)=="trainee"){echo 'class="active"';}?>">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
							<i class=""></i>
						</p>
					</a>
				</li>


				
				<li class="nav-item">
					<a href="<?= base_url() ?>trainee/trainee_history/<?=$trainee_username?>" class="nav-link">
					<i class="nav-icon far fa-newspaper"></i>
							<p>Trainee History </p>
					</a>
				</li>
				
				<li class="nav-item">
					<a href="<?= base_url() ?>trainee/Certificate_list/<?=$trainee_username?>"" class="nav-link">
						<i class="nav-icon fas fa-certificate"></i>
							<p>Certificate List </p>
					</a>
				</li>

				<!-- <li class="nav-item">
					<a href="<?= base_url() ?>trainee/step_trainee" class="nav-link">
						<i class="nav-icon fas fa-table"></i>
							<p>Online Application  </p>
					</a>
				</li> -->

				<li class="nav-item">
					<a href="<?= base_url() ?>trainee/edit_profile" class="nav-link">
						<i class="nav-icon fas fa-user-edit"></i>
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
