<?php
	include('database.php');
	
	
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

	<!-- Basic -->
	<title>Welcome to Shopping Zone</title>

	<!-- Define Charset -->
	<meta charset="utf-8">

	<!-- Responsive Metatag -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Page Description and Author -->
	<meta name="description" content="Shopping Zone - Responsive HTML5 Template">
	<meta name="author" content="Shopping Zone">


	<!-- Bootstrap CSS  -->
	<link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

	<!-- Font Awesome CSS -->
	<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

	<!-- Slicknav -->
	<link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

	<!-- Shopping Zone CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

	<!-- Responsive CSS Styles  -->
	<link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

	<link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">
	
	<link rel="stylesheet" type="text/css" href="css/shopping.css" media="screen">
  
	<link href="css/animate.min.css" rel="stylesheet">
	 
	<!-- Color CSS Styles  -->  
	<link rel="stylesheet" type="text/css" href="css/colors/red.css" title="green" media="screen" />
	<!--<link href="iconpopup.css" rel="stylesheet" type="text/css" />-->

  <!-- Shopping Zone JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>
</head>
<body>

  <!-- Container -->
  <div id="container">
	
    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">
      <!-- Start Header ( Logo & Naviagtion ) -->
      <div class="navbar navbar-default navbar-top" style="background-color:black;">
        <div class="container" >
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            
          </div>
		 
			<div class="navbar-collapse collapse" >
            
				<ul class="nav navbar-nav navbar-right">
					<li id="logout"><button class="btn btn-danger">LogOut</button></li>
				</ul>

			</div>
			<!-- End Header ( Logo & Naviagtion ) -->
		</div>
		 <ul class="wpb-mobile-menu" >
			<li id="logout"><button class="btn btn-danger">LogOut</button></li>
		 </ul>
	</div>
    </header>
    <!-- End Header -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-page">


          <!--Sidebar-->
          <div class="col-md-3 sidebar left-sidebar">
			<div class="widget widget-categories">
              <h4>MEN <span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="index.php?catg=1">Casual Shirts</a>
                </li>
			</div>
          </div>
          <!--End sidebar-->


          <!-- Start Blog Posts -->
          <div class="col-md-9 blog-box ">

            <!-- Start Post -->
            <div class="blog-post image-post wow animated zoomIn">
			<div class="hr5" style="margin-bottom:14px;"></div><br/>
			
			<center>
			<font color="#660033" size="+1" face="Comic Sans MS"><b>You are Successfully Registered!!! </b></font><br/><br/>
			<font size="+1" face="Comic Sans MS" color="#660033" ><b>Your id is:</b><font color="#FF3366"><?php echo $_REQUEST['subcon'];?></font><br/><br/></font>
			<?php
				
				if(isset($_REQUEST['con'])){
					if($_REQUEST['con']==2){
							include("about.php");
					}
				}
			?>
			</center>
			
			<div class="hr5" style="margin-bottom:14px;"></div>
          </div>
          <!-- End Blog Posts -->


        </div>
      </div>
    </div>
    <!-- End Content -->


    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Subscribe & Social Links Widget -->
          <div class="col-md-3">
            <div class="footer-widget mail-subscribe-widget">
              <h4>Get in touch<span class="head-line"></span></h4>
              <p>Join our mailing list to stay up to date and get notices about our new releases!</p>
              <form class="subscribe">
                <input type="text" placeholder="mail@example.com">
                <input type="submit" class="btn-system" value="Send">
              </form>
            </div>
            <div class="footer-widget social-widget">
              <h4>Follow Us<span class="head-line"></span></h4>
              <ul class="social-icons">
                <li>
                  <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                </li>
                <li>
                  <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a class="google" href="#"><i class="fa fa-google-plus"></i></a>
                </li>
                <li>
                  <a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                </li>
                <li>
                  <a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
                </li>
                <li>
                  <a class="instgram" href="#"><i class="fa fa-instagram"></i></a>
                </li>
                <li>
                  <a class="vimeo" href="#"><i class="fa fa-vimeo-square"></i></a>
                </li>
                <li>
                  <a class="skype" href="#"><i class="fa fa-skype"></i></a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Subscribe & Social Links Widget -->


          <!-- Start Twitter Widget -->
          <div class="col-md-3">
            <div class="footer-widget twitter-widget">
              <h4>Twitter Feed<span class="head-line"></span></h4>
              <ul>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.An Fusce eleifend aliquet nis application.</p>
                  <span>26 February 2014</span>
                </li>
                <li>
                  <p><a href="#">@GrayGrids </a> Lorem ipsum dolor et, consectetur adipiscing eli.</p>
                  <span>28 February 2014</span>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Twitter Widget -->


          <!-- Start Flickr Widget -->
          <div class="col-md-3">
            <div class="footer-widget flickr-widget">
              <h4>Shopping Zone<span class="head-line"></span></h4>
              <ul class="flickr-list">
                <li>
                  <a href="image/gallery/8.jpg" class="lightbox">
                    <img alt="" src="image/gallery/8.jpg">
                  </a>
                </li>
                <li>
                  <a href="image/gallery/6.jpg" class="lightbox">
                    <img alt="" src="image/gallery/6.jpg">
                  </a>
                </li>
                <li>
                  <a href="image/gallery/13.jpg" class="lightbox">
                    <img alt="" src="image/gallery/13.jpg">
                  </a>
                </li>
                <li>
                  <a href="image/gallery/18.jpg" class="lightbox">
                    <img alt="" src="image/gallery/18.jpg">
                  </a>
                </li>
                <li>
                  <a href="image/gallery/1.jpg" class="lightbox">
                    <img alt="" src="image/gallery/1.jpg">
                  </a>
                </li>
                <li>
                  <a href="image/gallery/20.jpg" class="lightbox">
                    <img alt="" src="image/gallery/20.jpg">
                  </a>
                </li>
                <li>
                  <a href="image/gallery/11.jpg" class="lightbox">
                    <img alt="" src="image/gallery/11.jpg">
                  </a>
                </li>
                <li>
                  <a href="image/gallery/22.jpg" class="lightbox">
                    <img alt="" src="image/gallery/22.jpg">
                  </a>
                </li>
                <li>
                  <a href="image/gallery/10.jpg" class="lightbox">
                    <img alt="" src="image/gallery/10.jpg">
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Flickr Widget -->


          <!-- Start Contact Widget -->
          <div class="col-md-3">
            <div class="footer-widget contact-widget">
              <h4><img src="image/2.jpg" class="img-responsive" alt="Footer Logo" /></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
              <ul>
                <li><span>Phone Number:</span> +01 234 567 890</li>
                <li><span>Email:</span> company@company.com</li>
                <li><span>Website:</span> www.yourdomain.com</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- .row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2014 Shopping Zone - All Rights Reserved</p>
            </div>
            <div class="col-md-6">
              <ul class="footer-nav">
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>


  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>