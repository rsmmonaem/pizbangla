<!-- Start right Content here -->

<?php
$user_id = $this->session->userdata('user_id');

$this->db->where('user_id', $user_id);
$full_name = $this->db->get("admin_user")->row()->full_name;
$user_type = $this->session->userdata('user_type');

if ($user_type != "institute_admin") {
	$this->session->unset_userdata("user_name");
	$this->session->unset_userdata("user_type");
	$this->session->unset_userdata("user_id");
	$this->session->unset_userdata("status");
	$this->session->sess_destroy();
	$this->session->set_flashdata('You are Not Institute_admin', 'logged_out');
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
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">


	<style>
	.bg-primary{
		background-color:#f0f2f5!important;
	}
	.bg-primary, .bg-primary>a{
		color:#000!important;
	}
</style> 
		<!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url() ?>uploads/institute/<?=$user_info->inst_logo?>" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"><?=implode(" ", $firstTwoWords);?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">

                <li class="user-header bg-primary">
                    <img src="<?= base_url() ?>uploads/institute/<?=$user_info->inst_logo?>" class="img-circle elevation-2" alt="User Image">
                    <p>
					<?=$full_name;?>
					Institute Name : <?=$user_info->inst_name?>
                       
                    </p>
                </li>



                <li class="user-footer">
                    <a href="<?= base_url() ?>institute_admin/edit_profile" class="btn btn-default btn-flat">Profile</a>
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
