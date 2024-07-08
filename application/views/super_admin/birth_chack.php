<?php
    include "inc/header_links.php";
    include "inc/left_sidebar.php";
    include "inc/top_bar.php";
		?>


<div class="content-wrapper">
			<div class="content-header">
				<div class="container-fluid">
					<div class="row mb-2">
						<div class="col-sm-6">
							<h1 class="m-0">News</h1>
						</div><!-- /.col -->
						<div class="col-sm-6">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">Home</a></li>
								<li class="breadcrumb-item active">Create News</li>
							</ol>
						</div><!-- /.col -->
					</div><!-- /.row -->
				</div><!-- /.container-fluid -->
			</div><!-- /.content-header -->


			<section class="content">
	<div class="container-fluid">
<div class="page-content-wrapper">

    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">




			<div id="information-part" class="content" role="tabpanel" aria-labelledby="information-part-trigger">

<form action="<?= base_url() ?>super_admin/add_trainee" method="post" enctype="multipart/form-data">
	<div class="col-md-12">
		<div class="modal-body">
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="field-1" class="control-label">Trainee Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="field-1" name="trainee_name" required="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="field-1" class="control-label">Trainee Name (English) <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="field-1" name="trainee_name_eng" required="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="field-1" class="control-label">Father Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="field-1" name="trainee_father_name" required="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="field-1" class="control-label">Father Name (English) <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="field-1" name="trainee_father_name_eng" required="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="field-1" class="control-label">Mother Name <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="field-1" name="trainee_mother_name" required="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="field-1" class="control-label">Mother Name (English) <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="field-1" name="trainee_mother_name_eng" required="">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="dob">Date Of Birth <span class="text-danger">*</span></label>
						<input class="form-control col-md-12 col-xs-12" name="trainee_dob" id="dob" value="" placeholder="Birth Date" type="date" autocomplete="off" required="required">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="field-1" class="control-label">Current Age <span class="text-danger">*</span></label>
						<input type="text" class="form-control" id="field-1" name="trainee_current_age" required="" placeholder="20 Years">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="field-1" class="control-label">NID Number <span class="text-danger">*</span></label>
						<input type="number" class="form-control" id="field-1" name="trainee_nid" required="">
					</div>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="item form-group">
						<label for="gender">Gender <span class="text-danger">*</span></label>
						<select class="form-control col-md-12 col-xs-12" name="trainee_gender" id="gender" required="required">
							<option value="">--Select--</option>
							<option value="Male">Male</option>
							<option value="Female">Female</option>
						</select>
						<div class="help-block"></div>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="item form-group">
						<label for="religion">Religion </label>
						<select class="form-control col-md-12 col-xs-12" name="trainee_religion" id="add_religion" required="">
							<option value="">--Select--</option>
							<option value="Islam">Islam</option>
							<option value="Hindu">Hindu</option>
							<option value="Christian">Christian</option>
							<option value="Buddha">Buddha</option>
						</select>
						<div class="help-block"></div>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="item form-group">
						<label for="phone">Phone Number<span class="text-danger">*</span></label>
						<input class="form-control col-md-12 col-xs-12" name="trainee_phone" id="number" required="required" type="number" autocomplete="off">
						<div class="help-block"></div>
					</div>
				</div>

				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="item form-group">
						<label for="phone">Alternate Phone Number<span class="text-danger">*</span></label>
						<input class="form-control col-md-12 col-xs-12" name="trainee_alternate_phone" id="number" required="required" type="number" autocomplete="off">
						<div class="help-block"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-3 col-xs-12">
					<div class="item form-group">
						<label for="phone">Educational Qualification (Year)<span class="text-danger">*</span></label>
						<input class="form-control col-md-12 col-xs-12" name="trainee_education" id="phone" value="" placeholder="Educational Qualification (Year)" required="required" type="text" autocomplete="off">
						<div class="help-block"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-3 col-xs-12">
					<div class="item form-group">
						<label for="phone">Past Training Info (Optional)</label>
						<input class="form-control col-md-12 col-xs-12" name="trainee_past_training" id="phone" value=""  type="text" autocomplete="off">
						<div class="help-block"></div>
					</div>
				</div>
				<div class="col-md-6 col-sm-3 col-xs-12">
					<div class="item form-group">
						<label for="phone">Name Of Youth Development Organization</label>
						<input class="form-control col-md-12 col-xs-12" name="trainee_youth_member" id="phone" value=""  type="text" autocomplete="off">
						<div class="help-block"></div>
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="field-6" class="control-label">Trainee Image</label>
						<input type="file" class="form-control" id="field-6" name="trainee_image" required="">
					</div>
				</div>

				<div class="col-md-6">
					<div class="form-group">
						<label for="field-6" class="control-label">Present Address</label>
						<textarea name="trainee_present_address" id="" class="form-control" cols="10" rows="5"></textarea>
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="field-6" class="control-label">Permanent Address</label>
						<textarea name="trainee_permanent_address" id="" class="form-control" cols="10" rows="5"></textarea>
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="field-6" class="control-label">Future Plan/Reason of taking This Training</label>
						<textarea name="trainee_training_reason" id="" class="form-control" cols="5" rows="5"></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
			<button type="submit" class="btn btn-raised btn-primary ml-2">ADD</button>
			<button type="button" class="btn btn-raised btn-danger" data-dismiss="modal">Close</button>
		</div>
	</div>
</form>

<button class="btn btn-primary" onclick="stepper.previous()">Previous</button>
</div>


</div><!-- /.container-fluid -->
</section>

</div>

<?php include "inc/footer.php";
        include "inc/dashboard_footer_js.php"; 
		?>


