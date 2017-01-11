<?php
	include('database.php');
	
	
?>
<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

	<!-- Basic -->
	<title>Shopping Zone | Index</title>

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

  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
 <!-- <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>-->
    <!-- use jssor.slider.mini.js (40KB) instead for release -->
    <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
     <script type="text/javascript" src="js/jssor.js"></script>
    <script type="text/javascript" src="js/jssor.slider.js"></script>
	
	<script type="text/javascript" src="js/validation.js"></script>
  <style>
  img[class*="align"],
	img[class*="wp-image-"] {
    height: auto;
    width:100%;
}
	.social-popout {
    height: auto;
    width: 100%;
   
    float: left;
    -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    -o-transition: all ease 0.5s;
    -ms-transition: all ease 0.5s;
    transition: all ease 0.5s;
}
.social-popout img {
    border-radius: 50%;
    margin: 8px;
    width: 100%;
    box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.8);
    -webkit-transition: all ease 0.5s;
    -moz-transition: all ease 0.5s;
    -o-transition: all ease 0.5s;
    -ms-transition: all ease 0.5s;
    transition: all ease 0.5s;
}
.social-popout img:hover {
    margin: 0px;
    box-shadow: 6px 6px 4px 4px rgba(0,0,0,0.3);
}
	</style>

</head>

<body>

  <!-- Container -->
  <div id="container">
	
    <!-- Start Header -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar 
      <div class="top-bar">
        <div class="container">
          <div class="row" style="background-color:light-blue;">
            <div class="col-md-6">
              <img src="image/1.jpg" class="img-responsive" />
            </div>    
          </div>
        </div>
      </div>
      <!-- End Top Bar -->
 
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
            <!-- Stat Search -->
            
            <!-- End Search -->
            <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a class="active"  href="index.php?con=1">Home</a>
              </li>
              <li>
                <a href="index.php?con=2">AboutUs</a>
              </li>
              <li>
                <a href="index.php?con=3">Contact</a>
              </li>
              <li>
                <a href="index.php?con=4">Gallery</a>
              </li>
              <li>
                <a href="index.php?con=5">Kart</a>
              </li>
			  <li>
                <a href="#">Account</a>
					<ul>
						<li>
							<a href="index.php?con=6 & subcon=login">Login</a>							
						</li>
						<li>
							<a href="index.php?con=6 & subcon=regd">Registration</a>
						</li>
					</ul>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="wpb-mobile-menu" >
          <li>
            <a class="active" href="?page=home">Home</a>
            </li>
          <li>
            <a href="index.php?con=2">AboutUs</a>
           </li>
          <li>
            <a href="index.php?con=3">Contact</a>
          </li>
          <li>
            <a href="index.php?con=4">Gallery</a>
          </li>
          <li>
            <a  href="index.php?con=5">Kart</a>
          </li>
		  <li>
                <a href="#">Account</a>
					<ul>
						<li>
							<a href="index.php?con=6 & subcon=login">Login</a>							
						</li>
						<li>
							<a href="index.php?con=6 & subcon=regd">Registration</a>
						</li>
					</ul>
              </li>
        </ul>
        <!-- Mobile Menu End -->

      </div>
      <!-- End Header ( Logo & Naviagtion ) -->

    </header>
    <!-- End Header -->
	<section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
		 <?php
			$rs=mysql_query("select * from slider1 ",$cn) or die(mysql_error());
			while($row=mysql_fetch_array($rs))
				{
			?>
          <div class="item active">
            <img class="img-responsive" src="<?php echo $row['image']; ?>" alt="slider">
           <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2 white">
                              <span><?php echo $row['caption1']; ?><strong> <?php echo $row['caption2']; ?></strong></span>
                              </h2>
                <h3 class="animated3 white">
                                <span><?php echo $row['caption3']; ?></span>
                              </h3>
                 <!--<p class="animated4 white"><a href="#" class="slider btn btn-system btn-large">Check Now</a>
                </p>-->
              </div>
            </div>
          </div>
		  <?php
				}
			?>
          <!--/ Carousel item end -->
		  <?php
			$rs=mysql_query("select * from slider2 ",$cn) or die(mysql_error());
			while($row=mysql_fetch_array($rs))
				{
			?>
          <div class="item">
            <img class="img-responsive" src="<?php echo $row['image']; ?>" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4 white">
                                <span><strong><?php echo $row['caption1']; ?></strong> <?php echo $row['caption2']; ?></span>
                            </h2>
                <h3 class="animated5 white">
                              <span><?php echo $row['caption3']; ?></span>
                            </h3>
                <!--<p class="animated6 white"><a href="#" class="slider btn btn-system btn-large">Buy Now</a>
                </p>-->
              </div>
            </div>
          </div>
		  <?php
				}
			?>
			<?php
			$rs=mysql_query("select * from slider3 ",$cn) or die(mysql_error());
			while($row=mysql_fetch_array($rs))
				{
			?>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="<?php echo $row['image']; ?>" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                                <span><?php echo $row['caption1']; ?> <strong><?php echo $row['caption2']; ?></strong></span>
                            </h2>
                <h3 class="animated8 white">
                              <span><?php echo $row['caption3']; ?></span>
                            </h3>
                <div class="">
                  <!--<a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
                --></div>
              </div>
            </div>
          </div>
		  <?php
				}
			?>
          <!--/ Carousel item end -->
        </div>

        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row blog-page">


          <!--Sidebar-->
          <div class="col-md-3 sidebar left-sidebar">

            <!-- Search Widget -->
            <div class="widget widget-search">
              <form action="#">
                <input type="search" placeholder="Enter Keywords..." />
                <button class="search-btn" type="submit"><i class="fa fa-search"></i></button>
              </form>
            </div>

            <!-- Categories Widget -->
            <div class="widget widget-categories">
              <h4>MEN <span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="index.php?catg=1">Casual Shirts</a>
                </li>
                <li>
                  <a href="index.php?catg=2">Jeans</a>
                </li>
                <li>
                  <a href="index.php?catg=3">T-Shirts</a>
                </li>
                <li>
                  <a href="index.php?catg=4">Shorts</a>
                </li>
				<li>
                  <a href="index.php?catg=5">Watches</a>
                </li>
				<li>
                  <a href="index.php?catg=6">Footwear</a>
                </li>
              </ul>
            </div>
			<div class="widget widget-categories">
              <h4>WOMEN <span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="index.php?id=7">Dresses</a>
                </li>
                <li>
                  <a href="index.php?id=8">Churidar Suits</a>
                </li>
                <li>
                  <a href="index.php?id=9">Kurtas</a>
                </li>
                <li>
                  <a href="index.php?id=10">Sandals</a>
                </li>
				<li>
                  <a href="index.php?id=11">Office Wear</a>
                </li>
				<li>
                  <a href="index.php?id=12">Artificial Jewellery</a>
                </li>
              </ul>
			  </div>
			  <div class="widget widget-categories">
              <h4>KIDS <span class="head-line"></span></h4>
              <ul>
                <li>
                  <a href="index.php?id=13">Baby Apparel</a>
                </li>
                <li>
                  <a href="index.php?id=14">Girls Apparel</a>
                </li>
                <li>
                  <a href="index.php?catg=15">Boys Apparel</a>
                </li>
                <li>
                  <a href="index.php?catg=16">Graphic Apparel</a>
                </li>
				<li>
                  <a href="index.php?catg=17">Kids</a>
                </li>
              </ul>
			  </div>
     
			<h4 class="headinn classic-title"><span>ShoppingZone.Com</span></h4>
		    <div class="widget widget-tags">
			  <img alt="Shopaholic" class="img-responsive" src="image/5.jpg">
			</div>
          </div>
          <!--End sidebar-->


          <!-- Start Blog Posts -->
          <div class="col-md-9 blog-box ">

            <!-- Start Post -->
            <div class="blog-post image-post wow animated zoomIn">
			<div class="hr5" style="margin-bottom:14px;"></div>
<?php
if(!($_REQUEST['catg'])and !($_REQUEST['con']))
{
include("home.php");
}
if(isset($_REQUEST['con'])){
	if($_REQUEST['con']==2){
			include("about.php");
	}else{
		if($_REQUEST['con']==1){
			include("home.php");
	}else{
		if($_REQUEST['con']==3){
			include("contact.php");
	}else{
		if($_REQUEST['con']==4){
			include("gallery.php");
	}else{
		if($_REQUEST['con']==5){
			include("kart.php");
	}else{
		if($_REQUEST['con']==6){
			if($_REQUEST['subcon']=='login'){
				include("login.php");
			}else{
				if($_REQUEST['subcon']=='regd'){
					include("registration.php");
				}
			}
	}
	}if($_REQUEST['con'] == 18){
				include("items.php");
	}if($_REQUEST['con'] ==7){
		include("order.php");
	}
	}
	}
	}	
	}
	}
if(isset($_REQUEST['catg'])){
	if($_REQUEST['catg']==1){
			include("shirts.php");
	}else{
		if($_REQUEST['catg']==2){
			include("jeans.php");
	}else{
		if($_REQUEST['catg']==3){
			include("t_shirts.php");
	}else{
		if($_REQUEST['catg']==4){
			include("shorts.php");
	}else{
		if($_REQUEST['catg']==5){
			include("watches.php");
	}else{
		if($_REQUEST['catg']==6){
			include("shoes.php");
	}
	}
	}
	}
	}	
	}
}
	/*if($_REQUEST['catg'] == 1){
		if($_REQUEST['subcatg']== 'Casual Shirts'){
			include("shirts.php");
		}
	}
		if($_REQUEST['catg'] == 1){
			if($_REQUEST['subcatg']== 'Jeans'){
			include("jeans.php");
		}			
	}
		if($_REQUEST['catg'] == 1){
			if($_REQUEST['subcatg']== 'T-Shirts'){
			include("t_shirts.php");
		}				
	}
		if($_REQUEST['catg'] == 1){
			if($_REQUEST['subcatg']== 'Shorts'){
			include("shorts.php");
		}				
	}
		if($_REQUEST['catg'] == 1){
			if($_REQUEST['subcatg']== 'Watches'){
			include("watches.php");
		}	
	}
		if($_REQUEST['catg'] == 1){
			if($_REQUEST['subcatg']== 'Footwear'){
			include("shoes.php");
		}			
	}*/
?><br/><br/>
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