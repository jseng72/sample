<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Us | Impact By Distinctive Themes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
    'use strict';
        jQuery('body').backstretch([
            "images/bg/bg1.jpg", 
            "/storage/posts/impact1.jpg",
            "images/bg/bg2.jpg",
            "images/bg/bg3.jpg"
        ], {duration: 5000, fade: 500});

        $("#mapwrapper").gMap({ controls: false,
            scrollwheel: false,
            markers: [{
                latitude:40.7566,
                longitude: -73.9863,
            icon: { image: "images/marker1.jpg",
                iconsize: [44,44],
                iconanchor: [12,46],
                infowindowanchor: [12, 0] } }],
            icon: {
                image: "images/marker1.jpg",
                iconsize: [26, 46],
                iconanchor: [12, 46],
                infowindowanchor: [12, 0] },
            latitude:40.7566,
            longitude: -73.9863,
            zoom: 14 });
    });
    </script>
</head><!--/head-->
<body>
<div id="preloader"></div>
<?php include 'navbar.php'; ?>

    <section id="single-page-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">About Us</h2>
                                    <hr>
                                    <p>Provide online store,website and cms solution <br>customization to small businesses who have limited access to, or bound by costly solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

    <div id="content-wrapper">
        <section id="about-us" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="row">
                    <div class="col-md-12 fade-up">
                        <div class="col-md-6 fade-up"> 
  <!--                          <form class="form-area " id="myForm" action="index.php" method="get" class="contact-form text-right"> 
                        <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right"> 
                  <form class="form-area " id="myForm" action="/mailmsg" method="get" class="contact-form text-right">   
<form class="form-area " id="myForm" action="route::get(HomeController@sendmsg)" method="get" class="contact-form text-right">

                  -->
                    <!-- start of wip for email function 18-Sep-2019 -->
                        <form class="form-area " id="myForm" action="/mailmsg" method="get" class="contact-form text-right">
                    <!-- end of wip for email function 18-Sep-2019 -->                                  
                        <h4>If you need, Just drop us a line</h4>                     
                        <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">
                        <br>
                        <textarea class="common-textarea mt-10 form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                        <button class="primary-btn mt-20">Send Message<span class="lnr lnr-arrow-right"></span></button>
                        <div class="alert-msg"> </div>                       
                        </form>  
                        </div> <!-- col-md-6 fade-up" -->
                        <div class="col-md-6 fade-up">
                            <p><span class="icon icon-home"></span>Setia Alam, Trefiol<br/>
                                <span class="icon icon-phone"></span>Eng Jen Shyan(Managing Director)<br/>
                                <span class="icon icon-phone"></span>+6012 228 1089<br/>
                                <span class="icon icon-envelop"></span> <a href="#">jseng72@gmail.com</a> <br/>
                                <span class="icon icon-facebook"></span> <strong><a href="https://www.facebook.com/groups/larasource" target="_blank">Malaysia Laravel Open Source</a> </strong><br/>
                            </p>
                        </div>

                    </div> <!-- class="col-md-12 fade-up" -->
                </div>
            </div> 
        </section>
    </div>           



    <script src="/Impact/js/bootstrap.min.js"></script>
    <script src="/Impact/js/jquery.prettyPhoto.js"></script>
    <script src="/Impact/js/plugins.js"></script>
    <script src="/Impact/js/init.js"></script>
</body>
</html>
