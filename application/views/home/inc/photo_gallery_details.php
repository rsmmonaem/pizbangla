
<div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h3><?= $photo_gallery->photo_gallery_title?></h3>
        </div>
        <div class="card-body">
            <div class="text-center">
                <img src="<?= base_url();?>uploads/photo_gallery/<?= $photo_gallery->photo_gallery_img?>" alt="<?= $photo_gallery->photo_gallery_title?>" class="img-fluid text-center" width="90%">
            </div>

        </div>
    </div>
</div>
