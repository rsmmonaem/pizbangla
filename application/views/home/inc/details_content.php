
<div class="col-md-7">
    <div class="card">
        <div class="card-header">
            <h3><?= $project->project_name?></h3>
        </div>
        <div class="card-body">
            <div class="text-center">

                <img src="<?= base_url();?>uploads/project/<?= $project->project_image?>" alt="<?= $project->project_name?>" class="img-fluid text-center" width="50%">

            </div>
            <p><?= $project->project_description?></p>
        </div>
    </div>
</div>
