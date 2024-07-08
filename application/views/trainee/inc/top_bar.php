<!-- Start right Content here -->

<?php
$user_id = $this->session->userdata('user_id');

$this->db->where('user_id', $user_id);
$user_type = $this->session->userdata('user_type');

if ($user_type != "trainee") {
	$this->session->unset_userdata("user_name");
	$this->session->unset_userdata("user_type");
	$this->session->unset_userdata("user_id");
	$this->session->unset_userdata("status");
	$this->session->sess_destroy();
	$this->session->set_flashdata('You are Not Institute_admin', 'logged_out');
	redirect("login");
}
 			

?>

<nav class="main-header navbar navbar-expand navbar-white navbar-light">
	<!-- Left navbar links -->
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
		</li>
	</ul>

	<!-- Right navbar links -->
	<ul class="navbar-nav ml-auto">



		<!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                <img src="<?= base_url() ?>uploads/trainees/<?=$user_info->trainee_image?>" class="user-image img-circle elevation-2" alt="User Image">
                <span class="d-none d-md-inline"><?=$user_info->trainee_name?></span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="left: inherit; right: 0px;">

                <li class="user-header bg-primary">
                    <img src="<?= base_url() ?>uploads/trainees/<?=$user_info->trainee_image?>" class="img-circle elevation-2" alt="User Image">
                    <p>
					<?=$user_info->trainee_name?>
                        <small>Member since Nov. 2012</small>
                    </p>
                </li>

                <li class="user-footer">
                    <a href="#" class="btn btn-default btn-flat">Profile</a>
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
