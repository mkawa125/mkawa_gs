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
    <title>Mkawa-Team</title>
    <link rel="icon" type="image/ico" href="<?php echo base_url()?>/images/mkawa2.png"/>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/overwrite.css">
    <link href="<?php echo base_url()?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />

    <style>
        .box{
            margin: 30px;
            background: whitesmoke;
            border: 0 solid #848484;
            height: 350px;
            padding: 10px;
            -moz-box-shadow: 3px 3px 5px 6px #848484;
            -webkit-box-shadow: 3px 3px 5px 6px #848484;
            box-shadow: 3px 3px 3px 3px #ccc;

        }
        .box1 {
            margin: 5px 30px 20px 30px;
            background: whitesmoke;
            border: 0 solid #848484;
            height: inherit;
            padding: 10px;
        }
        .box2 {
            margin: 0 auto;
            background: white;
            border: 0 solid #848484;
            padding: 0 10px;
            -moz-box-shadow: 3px 3px 5px 6px #848484;
            -webkit-box-shadow: 3px 3px 5px 6px #848484;
            box-shadow: 1px 5px 5px 4px #ccc;
            font-size: 14px;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
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
        .paragraph{
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
            font-size: 13px;
            line-height: 30px;
        }
        .head{
            color: black;
            font-size: x-large;
            text-align: center;
            padding: 10px;
            background-color: #8ba8af;
            border-radius: 0;
            box-shadow: 1px 5px 5px 4px whitesmoke;

        }
        .head2{
            color: ;
            font-size: x-large;
            text-align: center;
            padding: 10px;
            margin-top: 10px;
        }
        .catalog{
            border: 1px inherit solid;
            border-radius: 200px;
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
        }
        .title{
            color: #223389;
            font-size: x-large;
            text-shadow: 2px 2px 2px #848484;
        }
        .trusted{
            width: 70px;
            height: 40px;
        }
        .text-center h4{
            color: cornflowerblue;
        }
        @media screen and (max-width: 600px) {
            .head{
                color: black;
                font-size: small;
                text-align: center;
                padding: 10px;
                background-color: #8ba8af;
                border-radius: 0;
                box-shadow: 1px 5px 5px 4px whitesmoke;
            }
            .text-center{
                font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
                font-size: small;
                text-align: left;
            }
            .text-center h4{
                color: cornflowerblue;
            }
            .text-center h2{
                font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
                font-size: small;
            }
            .paragraph{
                font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
                font-size: small;
                line-height: 22px;
            }
            .wow{
                border-bottom: 4px solid whitesmoke;
            }
            .fa{
                color: white;
                font-size: 30px;
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
                    <li><a href="<?php echo base_url()?>index.php/pages/services">Products and services</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/about">About Us</a></li>
                    <li class="active"><a href="<?php echo base_url()?>index.php/pages/team">Our Team</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/contacts">Contact</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<br>
<br>
<br>
<br>
<div id="">
    <div class="container box2">
        <div class="text-center">
            <h2 class="head">Mkawa organization's Team</h2>
            <p class="paragraph">Mkawa general supply company limited has a lot of professionals in assuring that you get the service that you deserve.<br>
                You can also <a href="<?php echo base_url()?>index.php/Download/download/Notus_catalogue.pdf">click here to download our catalogue</a>. The listed below are some of staffs in our team</p>
        </div>
        <div class="row">
            <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <h2>Mr.Saidi Dahabu S</h2>
                    <img src="<?php echo base_url()?>images/man1.png" alt="" class="catalog">
                    <h4>Founder & CEO</h4>
                    <p class="paragraph">He is Organization chief executive officer. He graduated bachelor of science in computer science at university of Dar es salaam on 2018</p>
                    <p class="paragraph"  style="color: #f0ad4e">Contact: +255 717 495 198</p>
                </div>
            </div>
            <div class="col-md-4 wow bounceInDown" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <h2>Pius Shungu</h2>
                    <img src="<?php echo base_url()?>images/man1.png" alt="">
                    <h4>Marketing Director</h4>
                    <p class="paragraph">He is Organization chief Operation Executive. He graduated bachelor of business administration at university of Dar es salaam on 2018</p>
                    <p class="paragraph"  style="color: #f0ad4e">Contact: +255 717 495 198</p>
                </div>
            </div>
            <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.3s">
                <div class="text-center">
                    <h2>Yusuph Wikama</h2>
                    <img src="<?php echo base_url()?>images/man1.png" alt="">
                    <h4>Marketing Manager</h4>
                    <p class="paragraph">He is Organization marketing manager. He graduated bachelor of business administration at university of Dar es salaam on 2018</p>
                    <p class="paragraph" style="color: #f0ad4e">Contact: +255 717 495 198</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--/#our-team-->
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
                Designed<a href="http://www.mkawa.host"> by mkawa.host</a>
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

</html>

