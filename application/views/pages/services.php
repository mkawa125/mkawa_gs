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
    <title> Mkawa-Products</title>
    <link rel="icon" type="image/ico" href="<?php echo base_url()?>/images/mkawa2.png"/>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/overwrite.css">
    <link href="<?php echo base_url()?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />

    <style>
        .box2 {
            margin: 20px auto;
            background: white;
            border: 0 solid #848484;
            padding: 10px;
            -moz-box-shadow: 3px 3px 5px 6px #848484;
            -webkit-box-shadow: 3px 3px 5px 6px #848484;
            box-shadow: 1px 5px 5px 4px #ccc;
        }
        .paragraph{
            font-family: Georgia;
            font-size: medium;
            line-height: 30px;
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
        .navbar{
            background-color: #5bbbff;
        }
        .hi-icon-wrap {
            padding-bottom:30px;
            padding-left:10px;
            padding-right:10px;
            background-color: whitesmoke;
        }
        .head{
            font-size: x-large;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }
        @media screen and (max-width: 600px){
            .fa{
                color: white;
                font-size: 20px;
            }
            .catalog{
                width: 150px;
                height: 100px;
                margin: 5px;
                border: 1px inherit solid;
                border-radius:
            }
            .hi-icon-wrap {
                padding-bottom: 4px;
                padding-left: 5px;
                padding-right: 5px;
                background-color: whitesmoke;
            }
            .box2 {
                margin: 10px 5px;
                background: white;
                border: 0 solid #848484;
                padding: 10px;
                -moz-box-shadow: 3px 3px 5px 6px #848484;
                -webkit-box-shadow: 3px 3px 5px 6px #848484;
                box-shadow: 1px 5px 5px 4px #ccc;
                font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
            }
            .text-center{
                font-size: smaller;
                padding: 15px;
                text-align: center;
            }
            .text-center h3{
                font-size: large;
                text-align: center;
                color: cornflowerblue;
            }

        }

    </style>
</head>

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
                    <li><a href="<?php echo base_url()?>index.php/pages/home">Home</a></li>
                    <li class="active"><a href="<?php echo base_url()?>index.php/pages/services">Products and services</a></li>
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

<div id="feature">
    <div class="container box2">
        <div class="row">
            <div class="text-center">
                <h3 class="head">Our Products and Services</h3>
                <p>Mkawa general suplly company limited offers you the
                    following equipments for insuring safety while you are working
                    <a href="<?php echo base_url()?>index.php/Download/download/Notus_catalogue.pdf">Click here to download our full catalogue</a></p><hr>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Work wear</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/wekwea2.jpg">
                        <p>We have special clothes wearing at work</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Work wear</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/workwea.jpg">
                        <p>clothes for wearing at work. We have the clothes of any kind</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Foot Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/foot1.jpg">
                        <p>Quality equipments for protecting feet while working</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Hand Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/images (16).jpg">
                        <p>High quality gloves for wearing to protect hands while working</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Fall Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/images (10).jpg">
                        <p>Quality fall protection equipments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f"> Feet Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/img5.jpg">
                        <p>Fall protection equipments</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Reflective Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/img0.jpg">
                        <p>Quality clothes for reflecting sun from burning while working</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Reflective Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/img13.jpg">
                        <p>Quality clothes for reflecting sun from burning while working</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Fall Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/images (12).jpg">
                        <p>Quality fall protection equipments when working on high buildings</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Head Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/head2.jpg">
                        <p>We have high quality equipments for protecting head on construction works</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Ears Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/images (14).jpg">
                        <p>Instruments for protecting ears from harmful sound while working</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <div class="hi-icon-wrap hi-icon-effect">
                        <h2 style="color: #ec971f">Eyes  Protection</h2>
                        <img class="catalog" src="<?php echo base_url()?>images/eye2.jpg">
                        <p>Eye protection from harmful lights while working</p>
                    </div>
                </div>
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
            &copy; Mkawa general supply. All Rights Reserved.
            <div class="credits">
                Designed<a href="http://mkawa.host"> by mkawa.host</a>
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

