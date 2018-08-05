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
    <title>mkawa Contacts</title>
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
    .container{
        font-size: small;
        font-family: "Roboto Slab", "ff-tisa-web-pro", "Georgia", Arial, sans-serif;
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
    @media screen and (max-width: 600px){
        .fa{
            font-size: 30px;
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
                    <li><a href="<?php echo base_url()?>index.php/pages/home">Home</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/services">Products and services</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/about">About Us</a></li>
                    <li><a href="<?php echo base_url()?>index.php/pages/team">Our Team</a></li>
                    <li class="active"><a href="<?php echo base_url()?>index.php/pages/contacts">Contact</a></li>
                </ul>
            </div>
        </div>
        <!--/.container-->
    </nav>
    <!--/nav-->
</header>
<!--/header-->

<footer>
    <div id="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
                    <h2>Contact us any time</h2>
                    <p>Dear customer Mkawa general suppl and trading company is satisfied with a alot of staffs
                        and we are well interested to help you</p>
                    <br>
                    <p>Please fill the information in the provided for and drop us a line for ant matter. Your contribution is more valuable to us
                    You can click on the navigation bar above to see our products and services.
                        You can also <a href="<?php echo base_url()?>index.php/Download/download/Notus_catalogue.pdf">click here to download our catalogue</a></p>
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
                    <h2>Direct Contact Addresses</h2>
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
                </div>

                <div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <h2>message</h2>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>

                        <button type="submit" class="btn btn-danger">SEND</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--/#contact-->
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

