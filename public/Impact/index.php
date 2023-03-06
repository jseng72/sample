<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | Impact By Distinctive Themes</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/pe-icons.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" href="images/ico/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/ico/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/ico/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" href="images/ico/apple-touch-icon-57x57.png">

    <script type="text/javascript">
    jQuery(document).ready(function($){
	'use strict';
      	jQuery('body').backstretch([
	        "images/bg/bg1.jpg", 
          "/storage/posts/impact1.jpg",
	        "images/bg/bg2.jpg",
	        "images/bg/bg3.jpg"
	    ], {duration: 5000, fade: 500, centeredY: true });

		$("#mapwrapper").gMap({ controls: false,
         	scrollwheel: false,
         	markers: [{
              	latitude:40.7566,
				longitude: -73.9863,
          	icon: { image: "images/marker.png",
              	iconsize: [44,44],
          		iconanchor: [12,46],
          		infowindowanchor: [12, 0] } }],
          	icon: {
              	image: "images/marker.png",
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

    <section id="main-slider" class="no-margin">
        <div class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                	<span class="home-icon pe-7s-gleam bounce-in"></span>
                                    <h2 class="boxed animation animated-item-1 fade-down">WE GONNA HELP YOU MAKE AN IMPACT</h2>
                                    <p class="boxed animation animated-item-2 fade-up">Our expertise will guide you to success. Without Fail.</p>
                                    <br>
                                    <a class="btn btn-md animation bounce-in" href="/Impact/services.php">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
    </section><!--/#main-slider-->

        <section id="about-us" class="white">
          <div class="container">
              <div class="gap"></div>
              <div class="row">
                  <div class="col-md-12">
                      <div class="center gap fade-down section-heading">
                          <h2 class="main-title">A Little About Us</h2>
                          <hr>
                          <p>Provide online store,website and cms solution <br>customization to small businesses who have limited access to, or bound by costly solutions.</p>
                      </div>
                  </div>
              </div>
              <div class="gap"></div>
              <div class="row fade-up">
                  <img class="pull-left img-responsive quote-author-list" src="images/logo/Laravel-Logo.png">
              </div>
              <!--
              <div class="row">
                  <div class="col-md-10 col-md-offset-1 fade-up">
                      <p>Paragraph 1.</p>

                      <p>Paragraph 2.</p>
                  </div>

              </div>   
              -->
          </div> <!--/.container-->
        </section> <!--/.about-us-->

    <script src="js/plugins.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWDPCiH080dNCTYC-uprmLOn2mt2BMSUk&amp;sensor=true"></script>
    <script src="js/init.js"></script>
</body>
</html>
