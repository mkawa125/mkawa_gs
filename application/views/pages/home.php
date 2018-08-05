<?php
/**
 * Created by PhpStorm.
 * User: papaa_mukuru
 * Date: 24/12/2017
 * Time: 17:15
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mkawa-Home</title>
    <link rel="icon" type="image/ico" href="<?php echo base_url()?>/images/mkawa2.png"/>


    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/overwrite.css">
    <link href="<?php echo base_url()?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />

</head>
<style>
    .box1 {
        margin: 20px 30px 20px 30px;
        background: whitesmoke;
        border: 0 solid #848484;
        height: inherit;
        padding: 10px;
        font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
    }
    .box2 {
        margin: 30px;
        background: white;
        border: 0 solid #848484;
        padding: 10px;
        -moz-box-shadow: 3px 3px 5px 6px #848484;
        -webkit-box-shadow: 3px 3px 5px 6px #848484;
        box-shadow: 1px 5px 5px 4px #ccc;
    }
    .box3 {
        margin: 0 30px;
        background: white;
        border: 0 solid #848484;
        padding: 10px;
        -moz-box-shadow: 3px 3px 5px 6px #848484;
        -webkit-box-shadow: 3px 3px 5px 6px #848484;
        box-shadow: 1px 5px 5px 4px #ccc;
    }
    .head{
        color: black;
        font-size: x-large;
        text-align: center;
        padding: 10px;
        background-color: #ffe032;
    }
    .head2{
        color: white;
        font-size: x-large;
        text-align: center;
        padding: 10px;
        background-color: #0e3833;
        text-shadow: 2px 2px 4px #000000;
        margin-top: 10px;
    }
    .catalog{
        width: 100px;
        height: 100px;
        margin: 5px;
        border: 1px inherit solid;
        border-radius:
    }
    .fa{
        color: white;
        font-size: 40px;
    }
    .fafb{
        color: darkblue;
        font-size: 30px;
    }
    .fatwt{
        color: cornflowerblue;
        font-size: 30px;
    }
    .faggl{
        color: firebrick;
        font-size: 30px;
    }
    .falin{
        color: royalblue;
        font-size: 30px;
    }
    .facal{
        color: #3c763d;
        font-size: 20px;
    }
    .navbar{
        background-color: #5bbbff;
    }
    .slid{
        width: 100%;
        height: 100%;
        margin-top: 20px;
    }
    .title{
        color: #223389;
        font-size: 40px;
        text-shadow: 1px 3px 2px #848484;
        font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
    }
    .trusted{
        width: 70px;
        height: 40px;
    }
    
    @media screen and (max-width: 600px) {
        .title {
            color: #223389;
            font-size: smaller;
            text-shadow: 1px 1px 2px #848484;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
            margin: 10px;
        }
        .box1 {
            margin: 10px 0 10px 0;
            background: whitesmoke;
            border: 0 solid #848484;
            height: inherit;
            padding: 10px;
            font-size: smaller;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }
        .box2 {
            margin: 10px 5px;
            background: white;
            border: 0 solid #848484;
            padding: 10px;
            -moz-box-shadow: 3px 3px 5px 6px #848484;
            -webkit-box-shadow: 3px 3px 5px 6px #848484;
            box-shadow: 1px 5px 5px 4px #ccc;
        }
        .box3 {
            margin: 10px 0 10px 0;
            background: whitesmoke;
            border: 0 solid #848484;
            height: inherit;
            padding: 10px;
            font-size: small;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }
        .head2{
            color: white;
            font-size: small;
            text-align: center;
            padding: 5px;
            background-color: #0e3833;
            text-shadow: 2px 2px 4px #000000;
            margin-top: 10px;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }
        .head{
            color: black;
            font-size: large;
            text-align: center;
            padding: 5px;
            background-color: #ffe032;
        }
        .trusted{
            width: 50px;
            height: 30px;
        }
        .fa{
            color: white;
            font-size: 20px;
        }
        .fafb{
            color: darkblue;
            font-size: 15px;
        }
        .fatwt{
            color: cornflowerblue;
            font-size: 15px;
        }
        .faggl{
            color: firebrick;
            font-size: 15px;
        }
        .falin{
            color: royalblue;
            font-size: 15px;
        }
        .facal{
            color: #3c763d;
            font-size: 20px;
        }
    }
</style>
<body>
<header id="header">
    <nav class="navbar navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url()?>index.php/pages/home"><h3>MKAWA</h3></a>
            </div>
            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo base_url()?>index.php/pages/home">Home</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/services">Products and services</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/about">About Us</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/team">Our Team</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/contacts">Contact</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<!--/header-->
<br>
<br>
<br>

<div class="container-fluid">
    <div class="row box2" style="background-color: white">
        <div class="row" style="text-align: center">
            <h2 class="title">MKAWA GENERAL SUPPLY AND TRADING COMPANY LTD</h2>
        </div>
        <div class="col-md-7">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Carousel indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for carousel items -->
                <div class="carousel-inner" style="height: inherit">
                    <div class="item active">
                        <img src="<?php echo base_url()?>images/img7.jpg" width="100%"  alt="First Slide">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>images/img12.jpg" width="100%"  alt="Second Slide">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url()?>images/img12.jpg" width="100%" alt="Third Slide">
                    </div>
                </div>
                <!-- Carousel controls -->
                <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="carousel-control right" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <div class="col-md-5">
            <div class="box1">
                <h3 class="head2">Organizational activities</h3>
                <p>Mkawa general supply limited is the company based on providing
                    comprehensive solution in procurement, logistic and trading services</p>

                    <h4 style="color: firebrick">We offer the following services</h4>
                    <ul type="square">
                        <li><a href="<?php echo base_url()?>index.php/pages/services">Supply construction materials and work wears</a></li>
                        <li><a href="<?php echo base_url()?>index.php/pages/services">supply of electrical equipments</a></li>
                    </ul>
                <p><a href="<?php echo base_url()?>index.php/Download/download">Click here to download our catalogue</a></p>

                <p><i class="fa facal fa-phone"></i> +255 717 495 198</p>
                <ul class="social-network">
                    <li><a href="#" class="fb" title="Facebook"><i class="fa fafb fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter" title="Twitter"><i class="fa fatwt fa-twitter"></i></a></li>
                    <li><a href="#" class="gplus" title="Google Plus"><i class="fa faggl fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin" title="Linkedin"><i class="fa falin fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row box3" style="background-color: white">
        <div class="col-md-6">
            <div class="box1">
                <h3 class="head">Our vission</h3>
                <p >We strive to provide direct benefit to all clients through
                    competitive pricing, scalable capabilities, and building quality partnerships. </p>
                <h3 style="color: cornflowerblue">Trusted by </h3>
                <p>We are trusted by the following popular companies</p>
                <ul class="social-network">
                    <li><a href="#" class="fb" title="Drager"><img src="<?php echo base_url()?>images/logo1.png" class="trusted"></a></li>
                    <li><a href="#" class="twitter" title="Pyramex"><img src="<?php echo base_url()?>images/logo2.png" class="trusted"></a></li>
                    <li><a href="#" class="gplus" title="Honeywell"><img src="<?php echo base_url()?>images/logo3.png" class="trusted"></a></li>
                    <li><a href="#" class="linkedin" title="Watt"><img src="<?php echo base_url()?>images/logo4.png" class="trusted"></a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box1">
                <h3 class="head">Why mkawa...?</h3>
                <p>We maintain technical expertise, professionalism, and financial
                    capacity to succeed on the largest and deemed most mission-critical requirements.
                    <a href="<?php echo base_url()?>index.php/Download2/download/Notus_catalogue.pdf">Click here to download our catalogue</a> </p>

                <h4 style="color: #2b669a">Sample products</h4>
                <img class="catalog" src="<?php echo base_url()?>images/wekwea2.jpg">
                <img class="catalog" src="<?php echo base_url()?>images/img13.jpg">
                <img class="catalog" src="<?php echo base_url()?>images/img5.jpg">
                <img class="catalog" src="<?php echo base_url()?>images/head2.jpg">

            </div>
        </div>
    </div>
</div>

<footer style="background-color: #848484">
    <div class="social-icon">
        <div class="container">
            <div class="col-md-6 col-md-offset-3">
                <ul class="social-network">
                    <li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <div class="copyright">
            &copy; mkawa general supply. All Rights Reserved.
            <div class="credits">
                Designed<a target="_blank" href="https://mkawa.host"> by mkawa.host</a>
            </div>
        </div>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url()?>js/jquery-2.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>js/parallax.min.js"></script>
<script src="<?php echo base_url()?>js/wow.min.js"></script>
<script src="<?php echo base_url()?>js/jquery.easing.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>js/fliplightbox.min.js"></script>
<script src="<?php echo base_url()?>js/functions.js"></script>
<script src="<?php echo base_url()?>contactform/contactform.js"></script>

</body>

</html>

