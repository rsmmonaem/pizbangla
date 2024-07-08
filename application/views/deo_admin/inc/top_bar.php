<!-- Start right Content here -->

<?php
$user_id = $this->session->userdata('user_id');

$this->db->where('user_id', $user_id);

$user_type = $this->session->userdata('user_type');

if ($user_type != "deo_admin") {
	$this->session->unset_userdata("user_name");
	$this->session->unset_userdata("user_type");
	$this->session->unset_userdata("user_id");
	$this->session->unset_userdata("status");
	$this->session->sess_destroy();
	$this->session->set_flashdata('You are Not Deo_admin', 'logged_out');
	redirect("login");
}

?>

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
        <li class="nav-item">
            <a class="nav-link" target="_blank" href="<?= base_url();?>" role="button"><i class="fa fa-globe"></i></a>
        </li>
	</ul>
	<style>
	.bg-primary{
		background-color:#f0f2f5!important;
	}
	.bg-primary, .bg-primary>a{
		color:#000!important;
	}
</style> 
	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">
		<!-- Navbar Search -->
		<li class="nav-item">
			<a class="nav-link" data-widget="navbar-search" href="#" role="button">
				<i class="fas fa-search"></i>
			</a>
			<div class="navbar-search-block">
				<form class="form-inline">
					<div class="input-group input-group-sm">
						<input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-navbar" type="submit">
								<i class="fas fa-search"></i>
							</button>
							<button class="btn btn-navbar" type="button" data-widget="navbar-search">
								<i class="fas fa-times"></i>
							</button>
						</div>
					</div>
				</form>
			</div>
		</li>

		<!-- Notifications Dropdown Menu -->

        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"><?=$user_info->full_name?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">

                <li class="user-header bg-primary">
                    <img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                    <p>
					<?=$user_info->full_name?> - DEO ADMIN
                        
                    </p>
                </li>

                <li class="user-footer">
                    <a href="<?= base_url();?>deo_admin/edit_profile" class="btn btn-default btn-flat">Profile</a>
                    <a href="<?= base_url();?>admin/logout" class="btn btn-default btn-flat float-right">Sign out</a>
                </li>
            </ul>
        </li>
		<li class="nav-item">
			<a class="nav-link" data-widget="fullscreen" href="#" role="button">
				<i class="fas fa-expand-arrows-alt"></i>
			</a>
		</li>
	</ul>
</nav>
<!-- /.navbar -->
