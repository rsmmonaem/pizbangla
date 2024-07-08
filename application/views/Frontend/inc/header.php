
<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center">

      <a href="index.html" class="logo d-flex align-items-center me-auto">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="<?= base_url() ?>assets/Frontend/assets/img/logo.png" alt=""> -->
        <h1 class="sitename">Piz Bangla</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#team">Top Earner</a></li>
          <li><a href="#pricing">Pricing</a></li>
          <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li> -->
          <li><a href="#contact">Contact</a></li>
					<?php

										$user_type = $this->session->userdata('user_type');
                    if ($user_type == 'normal_user') {
											//Controller Name is 'user' and User type is 'normal_user'
											// Our System is Controller Name == User_type
												$user_type = 'user';
										}else {
												$user_type = $this->session->userdata('user_type');
										}
                    $this->load->library('session');
                    if ($this->session->userdata('user_type','super_admin')== true): ?>
                        <li><a href="<?= base_url($user_type)?>" class="btn-getstarted">Dashboard</a></li>
                        <li><a href="<?= base_url()?>admin/logout" class="">logout</a></li>
                    <?php else: ?>
											<li><a href="<?= base_url()?>login" class="">Login</a></li>
      							<?php endif; ?>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>



    </div>
  </header>
