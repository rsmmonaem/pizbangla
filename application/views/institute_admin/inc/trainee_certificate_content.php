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
        background: #E5F3DC;
        height: 595.280029296875px;
        width: 841.8900146484375px;
        left: 0px;
        top: 0px;
        border-radius: 0px;
        margin-top: 100px;
    }
    .allpart{
        text-align: center;
        background-image: url(img/group2.png);
        background-repeat: no-repeat;
        height: 550px;
        width: 810px;
        background-position: center;
        display: flex;
    }
    .imgpart{
        text-align: center;
        background-image: url(img/Vector.png);
        background-repeat: no-repeat;
        background-position: center;
    }
    hr{
        width: 55%;
        text-align: center;
        border-top: 1px solid #ccc;
        margin: auto;
    }
    .mainpart{
        margin-top: 0px;
        margin: auto;
    }
    .bannar{
        text-align: center;
        margin-top: 50px;
    }
    .bannar .ban{
        margin-top: -30px;
        margin-left: 0px;
    }

    .info{
        margin-bottom: 80px;
    }
    .recc{
        display: inline-flex;
    }

    .rec{
        display: inline-flex;
    }
    .rec1{

        position: absolute;
        margin-top: -12px;
    }
    .rec4{
        position: absolute;
        margin-top: -120px;
    }
    .rec2{
        position: absolute;
        right: 0px;
    }
    .rec3{

        position: absolute;
        right: 0px;
        margin-top: -130px;
    }
</style>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Certificate</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<section class="certificate">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <div class="bgimg">
                    <div class="rec ">
                        <div class="rec1"><img src="<?= base_url() ?>assets/backend/img/Rectangle.png" alt=""></div>
                        <div class="rec2"><img src="<?= base_url() ?>assets/backend/img/Rectangle2.png" alt=""></div>
                    </div>

                    <div class="imgpart">
                        <div class="allpart">
                            <div class="mainpart">
                                <div class="bannar">
                                    <img src="<?= base_url() ?>assets/backend/img/Group.png" alt="img">
                                    <div class="ban"><img src="<?= base_url() ?>assets/backend/img/gg.png" alt="CERTIFICATE OF ACHIEVEMENT"></div>
                                </div>
                                <div class="info">
                                    <h2><?= $data->trainee_name ?></h2>
                                    <hr>
                                    <p>has successfully completed</p>
                                    <p><?= $data->dept_name ?></p>
                                    <p>Online Training on</p>
                                    <p>Right to information Act, 2009 for Government Designated Officers.</p>
                                    <p>6 April 2020</p>
                                </div>
                                <div class="sign">
                                    <hr>
                                    <h3><?= $data->trainee_name ?> </h3>
                                    <h5>UiUx Designer </h5>
                                </div>
                                <div class="<?= base_url() ?>assets/backend/img1">
                                    <img src="<?= base_url() ?>assets/backend/img/image 1.png" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="recc ">
                        <div class="rec4"><img src="<?= base_url() ?>assets/backend/img/Rectangle1.png" alt=""></div>
                        <div class="rec3"><img src="<?= base_url() ?>assets/backend/img/Rectangle3.png" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>
        <button class="btn btn-primary hidden-print" onclick="myFunction()"><span class="glyphicon glyphicon-print" aria-hidden="true"></span> Print</button>
    </center>
</section>


<script>
    function myFunction() {
        window.print();
    }
</script>
</body>
</html>
