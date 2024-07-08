<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>যুব উন্নয়ন অধিদপ্তর </title>
    <link rel="icon" type="image/logo.png" href="<?= base_url() ?>uploads/Training_Management_SystemLogo2.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/home_assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>assets/home_assets/css/style.css" />
</head>
<style>#header-site-info {
								left: 20px;
								margin-bottom: 0;
								padding: 10px;
								position: absolute;
								top: 80px;
								z-index: 100;
								}

								#site-name a,
#slogan {
  color: #ffffff;
}
#site-name a {
  outline: 0 none;
}
#site-name-wrapper {
  float: left;
  padding: 10px 20px;
}
#site-name {
  font-size: 1.9vw;
  font-weight: bold;
  text-shadow: -1px -1px 10px #333, 1px -1px 10px #333, -1px 1px 10px #333,
    1px 1px 10px #333;
}
#site-name,
#slogan {
  display: block;
}

#slogan {
  font-size: 1.5em;
  text-shadow: -1px -1px 10px #333, 1px -1px 10px #333, -1px 1px 10px #333,
    1px 1px 10px #333;
  line-height: 1;
}

#slogan2 {
  display: block;
  font-size: 1.1em;
  text-shadow: -1px -1px 10px #333, 1px -1px 10px #333, -1px 1px 10px #333,
    1px 1px 10px #333;
  line-height: 1;
  color: #ffffff;
}

#site-name a:link,
#site-name a:visited,
#site-name a:hover,
#site-name a:active {
  text-decoration: none;
}

@media screen and (min-width: 800px) {
  #logo {
    display: inline-block !important;
    float: left;
  }
  #site-name-wrapper {
    line-height: 2;
  }}

  @media screen and (min-width: 800px) {
  #logo {
    display: inline-block !important;
    float: left;
  }}

								</style>

<body style="font-family: 'Hind Siliguri', sans-serif;">

<main>
    <div class="container">
        <nav class="navbar bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand d-flex text-center" href="<?= base_url() ?>">
                    <img src="<?= base_url() ?>uploads/logo.png" alt=""  width="80px" height="80px"/>
                    <h5 class="logo-header m-auto"> &nbsp; ইমপ্যাক্ট-২ প্রকল্প</h5>
                </a>
                <div class="text-align-right">
                    <?php
                    $user_type = $this->session->userdata('user_type');
                    $this->load->library('session');
                    if ($this->session->userdata('user_type','super_admin')== true): ?>
                        <a href="<?= base_url($user_type)?>" class="btn btn-success">Dashboard</a>
                        <a href="<?= base_url()?>admin/logout" class="btn btn-primary">logout</a>
                    <?php else: ?>
                        <a href="<?= base_url()?>login" class="btn btn-primary">Login</a>
                    <?php endif; ?>

                </div>
            </div>

        </nav>
        <!-- top bar section-->
        <div class="row">
            <!-- slider section -->
            <div class="slider-section">
                <div class="slider-text">
					<br>

                </div>

                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php
                        foreach($data as $row): ?>

						<div class="carousel-item active">
							<div class="header-site-info" id="header-site-info">
										<div>
											<div id="logo">
												<a title="" href="#">
													<img alt="logo" src="<?= base_url() ?>uploads/logo.png">
												</a>
											</div>

											<div class="clearfix" id="site-name-wrapper">

													<span id="site-name">
														<a title="যুব উন্নয়ন অধিদপ্তর" href="#">
															যুব উন্নয়ন অধিদপ্তর
														</a>
													</span>

													<span id="slogan">
														গণপ্রজাতন্ত্রী বাংলাদেশ সরকার
													</span>
											</div>
										</div>

							</div>
								<img src="<?= base_url() ?>uploads/slider/<?= $row->slider_image ?>" class="d-block" alt="<?= $row->slider_title?>" />
								</div>
							<?php endforeach;  ?>
						</div>
                </div>
            </div>
            <!-- nav bar section -->


            <nav class="navbar navbar-expand-lg d-flex">
                <div class="">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                            aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a href="<?= base_url() ?>" class="nav-link"><i class="bi bi-house-door-fill"></i></a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>home/application"
                                   >
                                    অনলাইনে আবেদন করুন
                                </a>

                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= base_url(); ?>home/certificate"
                                   >
                                    সনদপত্র
                                </a>

                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url(); ?>home/about" >
                                    আমাদের সম্পর্কে
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                   গ্যালারি
                                </a>
                                <ul class="dropdown-menu">

                                    <li>
                                        <a class="dropdown-item" href="<?= base_url();?>home/photo_gallery">ফটোগ্যালারি</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="<?= base_url();?>home/notice_list"
                                   aria-expanded="false">
                                    নোটিশ বোর্ড
                                </a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="<?= base_url();?>home/news_list"
                                   aria-expanded="false">
                                    সকল খবরসমূহ
                                </a>
                            </li>




                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    ইন্সটিটিউট
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($this->aim->get_institute_home() as $row):?>
                                    <li><a class="dropdown-item" href="<?= base_url();?>home/institute_details/<?=$row->inst_id?>"><?= character_limiter($row->inst_name, 20) ?></a></li>
                                    <?php endforeach;?>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>

                                    <li>
                                        <a class="dropdown-item" href="<?= base_url();?>home/institute">সকল ইন্সটিটিউট</a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                   aria-expanded="false">
                                    চলমান কোর্স
                                </a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($this->adm->get_department_header() as $row):?>
                                        <li><a class="dropdown-item" href="<?= base_url();?>home/course_details/<?=$row->dept_id ?>">
                                                <?= character_limiter($row->dept_name, 20) ?></a></li>
                                    <?php endforeach;?>
                                    <li>
                                        <hr class="dropdown-divider" />
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="<?= base_url();?>home/department_list/">সকল চলমান কোর্স</a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link" href="<?= base_url();?>home/contact" >
                                   যোগাযোগ করুন
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
