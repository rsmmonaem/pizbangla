<div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h3 class="title">
                ফটোগ্যালারি
            </h3>
        </div>
        <div class="card-body">
            <div class="photogallery list">
                 <div class="albums">

        <?php

        foreach($this->apgm->get_photo_gallery() as $row): ?>



            <a href="<?= base_url() ?>home/photo_gallery_details/<?=$row->photo_gallery_id?>">

                <div class="album">

                    <div class="album-title">
                      <p>  <?=$row->photo_gallery_title?> <?= character_limiter($row->photo_gallery_title,20) ?></p>
                    </div>

                    <img src="<?= base_url() ?>uploads/photo_gallery/<?= $row->photo_gallery_img ?>" class="cover-image" alt="">
                </div>
            </a>
        <?php endforeach;  ?>

    </div>
            </div>
        </div>
    </div>


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
