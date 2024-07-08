
	<div class="col-md-7">
			<div class="card">
				<div class="card-header">
					<h2>খবর</h2>
				</div>
				<div class="card-body">
                    <?php foreach ($this->amn->get_news() as $row):?>
                        <div class="row mb-2">
                            <div class="col-md-6"><a href="<?= base_url();?>home/news/<?= $row->news_id?>">
                                    <img src="<?= base_url();?>uploads/news/<?= $row->news_image ?>"
                                         class="card-img-top img-fluid" alt="<?= $row->news_title?>"> </a> </div>
                            <div class="col-md-6">
                                <p class="card-text"><a href="<?= base_url();?>home/news/<?= $row->news_id?>"><i class="bi bi-arrow-right-circle"></i> <?= $row->news_title?></a></p>
                                <p><?= character_limiter($row->news_description, 150) ?></p>
                            </div>
                        </div>
                    <?php endforeach;  ?>


					<a href="<?= base_url();?>home/news_list" class="btn btn-light" > সকল </a>
				</div>
			</div>
			<div class="card mt-3">
				<div class="card-header">
					<p><a href="#" class="text-decoration-none"> ফোটোগ্যালারী </a></p>
				</div>
					<div class="card-body">

                        <div class="photogallery list">
                            <div class="albums">

                                <?php

                                foreach($this->apgm->get_home_photo_gallery() as $row): ?>



                                    <a href="<?= base_url() ?>home/photo_gallery_details/<?=$row->photo_gallery_id?>">

                                        <div class="album">

                                            <div class="album-title">
                                                <p>  <?=$row->photo_gallery_title?> <?= character_limiter($row->photo_gallery_title,20) ?></p>
                                            </div>

                                            <img src="<?= base_url() ?>uploads/photo_gallery/<?= $row->photo_gallery_img ?>" class="cover-image" alt="">
                                        </div>
                                    </a>
                                <?php endforeach;  ?>

                                <style>
                                    .albums {
                                        display: inline-block;
                                        overflow: hidden;
                                    }

                                    .album {
                                        left: 0;
                                        top: 0;
                                        display: inline-block;
                                        padding: 5px 5px 5px 5px;
                                        position: relative;
                                        width: 500px;
                                        height: 300px;
                                        overflow: hidden;
                                    }

                                    .album-title {
                                        position: absolute;
                                        width: 500px;
                                        background-color: #000000b0;
                                        color: #fff;
                                        bottom: 0px;
                                        height: 100px;
                                        font-size: 18px;
                                        padding: 5px;
                                        z-index: 99999;
                                    }

                                    .albums .album img {
                                        width: 500px;
                                        height: 300px;
                                        transition: .3s;
                                    }

                                    .albums .album img:hover {
                                        /* opacity: .7; */
                                        transform: scale(1.5);

                                    }
                                </style>

                            </div>
                        </div>

						<a href="<?= base_url();?>home/photo_gallery" class="btn btn-light" > সকল </a>
				</div>

			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="card mt-5 card-bottom-border">
						<h5 class="p-2">আমাদের ইন্সটিটিউট</h5>
						<div class="row">
							<div class="card-body d-flex">
								<img src="<?= base_url() ?>assets/home_assets/images/short-logo.png" alt="" class="img-fluid w-25" />
								<ul>
									<?php foreach ($this->aim->get_institute_home() as $row):?>
										<li><a href="<?= base_url();?>home/institute_details/<?=$row->inst_id?>"><?=  character_limiter($row->inst_name, 20)?> </a></li>
									<?php endforeach;?>

								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="card mt-5 card-bottom-border">
						<h5 class="p-2">চলমান কোর্স </h5>
						<div class="row">
							<div class="card-body d-flex">
								<img src="<?= base_url() ?>assets/home_assets/images/short-logo.png" alt="" class="img-fluid w-25" />
								<ul>
									<?php foreach ($this->adm->get_department_header() as $row):?>

										<li><a href="<?= base_url();?>home/course_details/<?=$row->dept_id ?>"> <?= character_limiter($row->dept_name, 20) ?></a></li>
									<?php endforeach;?>

								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>

