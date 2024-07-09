<?php

$user_name = $this->session->userdata('user_name');    
$user_id = $this->session->userdata('user_id');
$user_info = $this->umm->get_normal_user_modification_id('p_normal_users', $user_id);
$admin_info = $this->umm->get_user_modification_id('admin_user', $user_name);

$full_name = "$user_info->full_name";
$words = explode(" ", $full_name);
$firstTwoWords = array_slice($words, 0, 2);
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url() ?>user" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">Piz-Bangla Admin</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url()?>uploads/Training_Management_SystemLogo.png" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?=$full_name?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url() ?>user" class="nav-link <?php if($this->uri->segment(2)=="user"){echo 'class="active"';}?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>

				<li class="nav-item">
                    <a href="<?= base_url() ?>user/edit_user/<?=$user_info->user_id?>" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>My Referral</p>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="<?= base_url() ?>user/Withdraw/<?=$user_info->user_id?>" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Withdraw</p>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="<?= base_url() ?>user/withdraw_history/<?=$user_info->user_id?>" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Withdrawal History</p>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="<?= base_url() ?>user/product_buy_history/<?=$user_info->user_id?>" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>Product Purchase History</p>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a href="<?= base_url() ?>user/edit_user/<?=$user_info->user_id?>" class="nav-link">
                        <i class="nav-icon fas fa-user-cog"></i>
                        <p>User Profile</p>
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
