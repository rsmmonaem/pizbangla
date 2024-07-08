<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Certificate</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Syne:wght@400;500;600;700;800&display=swap');

*{
	margin: 0;
	padding: 0;
}

body{
	
	font-weight: 400;
	font-family: 'Dancing Script', cursive;
	



}

.container{
	background-image: url(http://192.168.80.207/training_management_system/assets/backend/img/Background.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center; 
	padding: 100px 130px;
	height: 796.8px;
	width: 1123.2px;
	left: 0px;
	top: 0px;
	border-radius: 0px;
	margin-top: 100px;
	


}
.allpart{
	
}
.imgpart{
	
}
hr{
	width: 35%;
	text-align: center;
	border-top: 1px solid #ccc;
	margin: auto;


}
.mainpart{
	margin-top: 40px;
	margin-bottom: 0px;
	margin: auto;
	
}
.bannar{
	text-align: center;
	margin-top: 80px;

}
.bannar .ban{
	margin-top: -30px;
	margin-left: 0px;
}
.bgimg{

}
@media print{
  .bannar img{display:inline;}
}
@media print {
* {
    -webkit-print-color-adjust: exact !important; /*Chrome, Safari */
    color-adjust: exact !important;  /*Firefox*/
  }
}
.sign{
	text-align: center;
}
.info{
	margin-bottom: 44px;
	margin-top: 56px ;
	text-align: center;
}

</style>
<body>
	<section class="certificate">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="bgimg">
					<div class="imgpart">
							<div class="allpart">
								<div class="mainpart">
									<div class="bannar">
										<img src="http://192.168.80.207/training_management_system/assets/backend/img/Group.png" alt="img">
										<div class="ban"><img src="http://192.168.80.207/training_management_system/assets/backend/img/gg.png" alt="CERTIFICATE OF ACHIEVEMENT"></div>
									</div>
									<div class="info">
										<h2 style="font-size: 60px"><?= $data->trainee_name ?></h2>
										<hr>
										<p style="font-size: 30px">has successfully completed</p>
										<p style="font-size: 30px" ><?= $data->dept_name ?> Course</p>
										<p style="font-size: 30px" >From, <?= $data->inst_name ?> .</p>
										<p style="font-size: 20px" ><?php echo date("D-M-Y");?></p>
									</div>
									<div class="sign">
										<hr>
										<h3><?= $data->trainee_name ?> </h3>
										<h5>Web Developer</h5>
									</div>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
	<br>
	<br>
	<br>
	<br>
	<br>

</body>
</html>
