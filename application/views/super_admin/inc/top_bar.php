<!-- Start right Content here -->

<?php
$user_id = $this->session->userdata('user_id');

$this->db->where('user_id', $user_id);
$user_type = $this->session->userdata('user_type');

if ($user_type != "super_admin") {
	$this->session->unset_userdata("user_name");
	$this->session->unset_userdata("user_type");
	$this->session->unset_userdata("user_id");
	$this->session->unset_userdata("status");
	$this->session->sess_destroy();
	$this->session->set_flashdata('You are Not Super Admin', 'logged_out');
	redirect("login");
}

?>
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

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">



		<!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url()?>uploads/Training_Management_SystemLogo2.png" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"><?=$user_info->full_name?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">
            <style>
                .bg-primary{
                    background-color:#f0f2f5!important;
                }
                .bg-primary, .bg-primary>a{
                    color:#000!important;
                }
            </style>
                <li  class="user-header bg-primary">
                    <img src="<?= base_url()?>uploads/Training_Management_SystemLogo2.png" class="img-circle elevation-2" alt="User Image">
                    <p>
                       <?=$user_info->user_name?>
                        <small><?=$user_info->full_name?></small>
                    </p>
                </li>

                <li class="user-footer">
                    <a href="<?= base_url();?>super_admin/edit_super_admin/<?=$user_info->user_name?>" class="btn btn-default btn-flat">Profile</a>
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

