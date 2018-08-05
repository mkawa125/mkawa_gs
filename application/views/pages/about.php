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
    <title>About Mkawa gs</title>
    <link rel="icon" type="image/ico" href="<?php echo base_url()?>/images/mkawa2.png"/>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url()?>css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url()?>css/overwrite.css">
    <link href="<?php echo base_url()?>css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet" />

    <style>
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
            margin: 20px auto;
            background: white;
            border: 0 solid #848484;
            padding: 10px;
            -moz-box-shadow: 3px 3px 5px 6px #848484;
            -webkit-box-shadow: 3px 3px 5px 6px #848484;
            box-shadow: 1px 5px 5px 4px #ccc;
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
        }
        .paragraphs{
            font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
            font-size: 14px;
            line-height: 35px;
        }
        .head{
            color: black;
            font-size: x-large;
            text-align: center;
            padding: 10px;
            background-color: #ffe032;
        }
        .fa{
            color: white;
            font-size: 40px;
        }
        .fahom{
            color: darkblue;
            font-size: 30px;
        }
        .fasms{
            color: cornflowerblue;
            font-size: 30px;
        }
        .facal{
            color: #3c763d;
            font-size: 30px;
        }
        .navbar{
            background-color: #5bbbff;
        }
        .slid{
            width: 100%;
            height: 100%;
        }
        .title{
            color: black;
            font-size: x-large;
            text-shadow: 2px 1px 2px #848484;
            text-align: left;
            margin-left: 20px;
        }
        .trusted{
            width: 60px;
            height: 40px;
        }
        .social{
            width: 30px;
            margin-left: 5px;
        }
        @media screen and (max-width: 600px){
            .box2 {
                margin: 20px auto;
                background: white;
                border: 0 solid #848484;
                padding: 10px;
                -moz-box-shadow: 3px 3px 5px 6px #848484;
                -webkit-box-shadow: 3px 3px 5px 6px #848484;
                box-shadow: 1px 5px 5px 4px #ccc;
                font-size: small;
                font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
            }
            .paragraphs{
                font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
                font-size: small;
                line-height: 30px;
            }
            .title{
                color: black;
                font-size: medium;
                text-shadow: 1px 1px 2px #848484;
            }
            .fa{
                color: white;
                font-size: 20px;
            }
            .social{
                width: 30px;
                margin-left: 10px;
            }
            .head{
                color: black;
                font-size: medium;
                text-align: center;
                padding: 5px;
                background-color: #ffe032;
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
                    <li class="active"><a href="<?php echo base_url()?>index.php/pages/about">About Us</a></li>
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
<br>
<div class="container-fluid">
    <div class="container box2">
        <h2 class="title">ABOUT MKAWA GENERAL SUPPLY LTD</h2>
        <div class="col-md-7">
            <img src="<?php echo base_url()?>images/green.jpg" class="slid"><br>
            <h2 class=""><strong>Background</strong></h2>
            <p class="paragraphs">Mkawa General was formed in 2014 and got incorporated in Tanzania on May 2015 as mkawa general supply and
                trading company limited. Our business model is based on providing a comprehensive solution in
                Procurement, Logistic, supply and trading services for private and public companies in Tanzania, Africa
                and across the world. the company aims at diversify it’s portfolios through investing a portions of its
                assets in the purchase and sale of securities such as stocks and bonds as well as forex trading on global
                markets in a near future. <a href="<?php echo base_url()?>index.php/Download/download/Notus_catalogue.pdf">click here to download our cataloge</a>
            </p>

            <h2 class=""><strong>Vision</strong></h2>
            <p class="paragraphs">We strive to provide direct benefit to all clients through competitive pricing, scalable capabilities, and
                building quality partnerships. We intend on building our history of success so that mkawa general supply may be a
                catalyst to a sustainable economy in Tanzania for many decades to come
            </p>

            <h2 class=""><strong>Objectives</strong></h2>
            <p class="paragraphs">Our objectives are to assist clients with various implementations of
                their projects, and we have confidence in our ability to generate the
                consensus and commitments necessary to succeed.You can <a href="<?php echo base_url()?>index.php/Download/download/Notus_catalogue.pdf">click here to download our catalog</a> We are prepared
                to stand behind our recommendations and to assist our clients with
                obtaining appropriate approvals to proceed.</p>

            <h2 class=""><strong>Mission</strong></h2>
            <p class="paragraphs">We maintain technical expertise, professionalism, and financial capacity to succeed on the largest
                and deemed most mission-critical requirements of help our Customers build a reliable, secure,
                manageable and flexible procurement supply and logistic Infrastructure which establishes a
                foundation for Clients to meet their business objectives In strict compliance with the Tanzania laws
            </p>

            <h2 class=""><strong>Values</strong></h2>
            <p class="paragraphs">We are committed to provide a source of economic progression for Tanzania by focusing
                on hiring, training, and development of our Tanzanian workforce while embracing the
                Tanzanian laws and other development polices. This company upholds such values as a
                guideline to its operation and business transactions:</p>
        </div>

        <div class="col-md-5">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4 class="head"><strong>Organization team</strong></h4>
                </div>
                <div class="panel-body">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="<?php echo base_url()?>images/man1.png" alt="" width="70px" height="55px" title="Chief Executive Officer"></a>

                        <div class="media-body">
                            <h4 class="media-heading" style="color: royalblue">Mr.Saidi Dahabu S</h4>
                            <p class="paragraph">He is Organization chief executive officer. He graduated bachelor of science in computer science at university of Dar es salaam on 2018</p>
                            <p class="paragraph"  style="color: #f0ad4e">Contact: +255 714 595951</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="<?php echo base_url()?>images/man.png" alt="" width="70px" height="55px" title="Marketing Director">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading" style="color: royalblue">Pius Shungu</h4>
                            <p class="paragraph">He is Organization chief Operation Executive. He graduated bachelor of business administration at university of Dar es salaam on 2018</p>
                            <p class="paragraph"  style="color: #f0ad4e">Contact: +255 717 495 198</p>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="media">
                        <a class="media-left" href="#">
                            <img src="<?php echo base_url()?>images/man.png" alt="" width="70px" height="55px" title="IT Director">
                        </a>
                        <div class="media-body">
                            <h4 class="media-heading" style="color: royalblue">Yusuph Wikama</h4>
                            <p>He is Organization marketing manager. He graduated bachelor of business administration at university of Dar es salaam on 2018</p>
                            <p class="paragraph"  style="color: #f0ad4e">Contact: +255 717 495 198</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="box2">
            <h2>Location and addresses</h2>
            <ul>
                <i class="fa fahom fa-home" style="font-size: xx-large"></i> @ TABATA BARAKUDA / TIBIC BLOCK 45B PLOT No. 73, Dar es salaam, Tanzania
                <hr>
                <li><i class="fa facal fa-phone fa-2x"></i> +255 717 495 198</li>
                <hr>
                <li><i class="fa fasms fa-envelope fa-2x">   </i> <a href="#"> info@mkawa.host</a></li>
                <hr>
                <li><i class="fa fasms fa-web fa-2x">   </i>Website: <a href="http://mkawa.host">www.mkawa.host</a></li>
                <hr>
            </ul>
            <h3>QUICK LINKS</h3>
            <ul style="margin-left: 10px">
                <li><a href="<?php echo base_url()?>index.php/pages/home">Home</a></li>
                <li><a href="<?php echo base_url()?>index.php/pages/contacts">Contact Us</a></li>
                <li><a href="<?php echo base_url()?>index.php/pages/services">Products</a></li>
                <li><a href="<?php echo base_url()?>index.php/pages/team">Our team</a></li>
                <li><a href="<?php echo base_url()?>index.php/Download/download/Notus_catalogue.pdf">Download Catalogue</a></li>
            </ul>
            </div>

            <div class="box1">
                <h3 style="font-size: large"><strong>Trusted by</strong></h3>
                <ul class="social-network">
                    <li><a href="#" class="fb" title="Drager"><img src="<?php echo base_url()?>images/logo1.png" class="trusted"></a></li>
                    <li><a href="#" class="twitter" title="Pyramex"><img src="<?php echo base_url()?>images/logo2.png" class="trusted"></a></li>
                    <li><a href="#" class="gplus" title="Honeywell"><img src="<?php echo base_url()?>images/logo3.png" class="trusted"></a></li>
                    <li><a href="#" class="linkedin" title="Watt"><img src="<?php echo base_url()?>images/logo4.png" class="trusted"></a></li>
                </ul>

                <h3>Find us on social networks</h3>
                <a href="" title="Facebook"><img src="<?php echo base_url()?>images/icon_fb.png" class="social"></a>
                <a href="" title="Instagram"><img src="<?php echo base_url()?>images/icon_ig.png" class="social"></a>
                <a href="" title="Twitter"><img src="<?php echo base_url()?>images/icon_tw.png" class="social"></a>
                <a href="" title="Google plus"><img src="<?php echo base_url()?>images/icon_gp.png" class="social"></a>
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

