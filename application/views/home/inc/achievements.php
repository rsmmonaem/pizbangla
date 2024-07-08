<div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h3>Achievements</h3>
        </div>
        <div class="card-body">
            <?php foreach ($projects as $row):?>
                <div class="row mb-2">
                    <div class="col-md-6"><a href="<?= base_url();?>home/details/<?= $row->project_id ?>">
                            <img src="<?= base_url();?>uploads/project/<?= $row->project_image ?>"
                                 class="card-img-top img-fluid" alt="<?= $row->project_name?>"> </a> </div>
                    <div class="col-md-6">
                        <p class="card-text"><a href="<?= base_url();?>home/details/<?= $row->project_id?>">
                                <i class="bi bi-arrow-right-circle"></i> <?= $row->project_name?></a></p>
                        <p><?= character_limiter($row->project_description, 150) ?></p>
                    </div>
                </div>
            <?php endforeach;  ?>
        </div>
    </div>
</div>
