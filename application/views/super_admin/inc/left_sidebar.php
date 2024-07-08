<?php
$user_id = $this->session->userdata('user_id');
$user_info = $this->umm->get_user_modification_id('admin_user',$user_id);
?>

<aside class="main-sidebar sidebar-dark-primary elevation-4">
	<!-- Brand Logo -->
	<a href="<?= base_url() ?>super_admin" class="brand-link">
		<img src="<?= base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
		<span class="brand-text font-weight-light">TSM-Admin</span>
	</a>

	<!-- Sidebar -->
	<div class="sidebar">
		<!-- Sidebar user panel (optional) -->
		<div class="user-panel mt-3 pb-3 mb-3 d-flex">
			<div class="image">
				<img src="<?= base_url()?>uploads/Training_Management_SystemLogo.png" class="img-circle elevation-2" alt="User Image">
			</div>
			<div class="info">
				<a href="#" class="d-block"><?=$user_info->full_name?></a>
			</div>
		</div>

		<!-- Sidebar Menu -->
		<nav class="mt-2">
			<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
				<!-- Add icons to the links using the .nav-icon class
					 with font-awesome or any other icon font library -->
				<li class="nav-item">
					<a href="<?= base_url() ?>super_admin" class="nav-link <?php if($this->uri->segment(2)=="super_admin"){echo 'class="active"';}?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
						<p>
							Dashboard
						</p>
					</a>
				</li>



                <!-- <li class="nav-item">
                    <a href="<?= base_url() ?>super_admin/add_institute" class="nav-link">
                        <i class="nav-icon fas fa-building"></i>
                        <p>
                             Add Institute
                        </p>
                    </a>
                </li> -->

				<!-- <li class="nav-item">
					<a href="<?= base_url() ?>super_admin/add_department" class="nav-link">
                        <i class="nav-icon fas fa-paper-plane"></i>
						<p>
						Department
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url() ?>super_admin/add_department" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Add Department</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url() ?>super_admin/department_list" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Department List</p>
							</a>
						</li>
					</ul>
				</li> -->

<!--                -->
<!--				<li class="nav-item">-->
<!--					<a href="--><?//= base_url() ?><!--super_admin/add_trainee" class="nav-link">-->
<!--					<i class="fas fa-user-plus fa-lg"></i>-->
<!--							<p>Trainee Registration </p>-->
<!--					</a>-->
<!--				</li>-->

				<!-- <li class="nav-item">
					<a href="<?= base_url() ?>super_admin/trainee_list" class="nav-link">
					<i class="nav-icon fas fa-users"></i>
							<p>Trainee List </p>
					</a>
				</li>

				<li class="nav-item">
					<a href="<?= base_url() ?>super_admin/certificate_list" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
							<p>Certificate Approval</p>
					</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url() ?>super_admin/certificate_generate" class="nav-link">
                        <i class="nav-icon fas fa-user-graduate"></i>
							<p>Certificate Generate</p>
					</a>
				</li>

                <li class="nav-item">
                    <a href="<?= base_url() ?>super_admin/pending_list" class="nav-link">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Pending Application List</p>
                    </a>
                </li> -->


                <!-- <li class="nav-item">
                    <a href="<?= base_url() ?>super_admin/add_slider" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
                        <p>Slider</p>
                    </a>
                </li> -->

				<!-- <li class="nav-item">
					<a href="" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
						<p>
						Gallery
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url() ?>super_admin/add_photo_gallery" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Add Photo Gallery</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url() ?>super_admin/photo_gallery_list" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Photo gallery list</p>
							</a>
						</li>

					</ul>
				</li>

                <li class="nav-item">
					<a href="" class="nav-link">
                        <i class="nav-icon far fa-images"></i>
						<p>
						Project Post
							<i class="fas fa-angle-left right"></i>
						</p>
					</a>
					<ul class="nav nav-treeview">
						<li class="nav-item">
							<a href="<?= base_url() ?>super_admin/project_list" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Project List</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url() ?>super_admin/add_project" class="nav-link">
								<i class="far fa-circle nav-icon"></i>
								<p>Create New Project Post</p>
							</a>
						</li>

					</ul>
				</li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Notice Publication
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>super_admin/add_notice" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Notice</p>
                            </a>
                        </li>
                    </ul>

					<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>super_admin/notice_list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notice list</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <i class="nav-icon far fa-newspaper"></i>
                        <p>
                            News Publication
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>super_admin/create_news" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create news</p>
                            </a>
                        </li>
                    </ul>
					<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>super_admin/news_list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News List</p>
                            </a>
                        </li>
                    </ul>
                </li> -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>
                            User Management
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>super_admin/add_user" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>super_admin/user_modification_list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>User List</p>
                            </a>
                        </li>
                    </ul>
                </li>

				<li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
                            Payment
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>super_admin/payment_request" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment Request (10)</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>super_admin/payment_history" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Payment History</p>
                            </a>
                        </li>
                    </ul>
                </li>

				<li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tasks"></i>
                        <p>
							Sales 
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>super_admin/sales_product" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sales Product</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>super_admin/sales_report" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Sales Report</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Pages
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url()?>super_admin/about_us/" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>About Page</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url()?>super_admin/contact_page" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Page</p>
                            </a>
                        </li>
                    </ul>
                </li>
				
                <li class="nav-item">
                    <a href="<?= base_url() ?>super_admin/message_list/" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Message List</p>
                    </a>
                </li>

				<li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-bullhorn"></i>
                        <p>
                            Notice Publication
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>super_admin/add_notice" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add Notice</p>
                            </a>
                        </li>
                    </ul>

					<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?= base_url() ?>super_admin/notice_list" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Notice list</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="<?= base_url() ?>super_admin/edit_super_admin/<?=$user_info->user_name?>" class="nav-link">
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
