<?php
session_start();
?>
<!DOCTYPE html>
<!--
	Awesome Responsive Template
	templatestock.co
-->
<html>
<head>
	<title>MyERP Portal</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<!-- Goggle Font -->
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">

	<!-- Font Css -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Animation Css -->
	<link rel="stylesheet" href="css/animate.css">


</head>
<body>
<!-- Header -->
<div class="header-div">

<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header logo-div bounceInLeft wow" data-wow-duration="2s">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index1.html">ERP Portal</a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse top-right-menu-ul bounceInRight wow" id="bs-example-navbar-collapse-1" data-wow-duration="4s">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#features">Features</a></li>
        <li><a href="#Services">Products</a></li>
        <li><a href="order.php">Orders</a></li>
        <li><a href="#About">About</a></li>
        <li><a href="#Price">Prices</a></li>
        <li><a href="#Testimonial">Testimonial</a></li>
        <li><a href="logou.php">Logout</a></li>
      </ul>
    </div><!-- End navbar-collapse -->
  </div><!-- End container -->
</nav>

<div class="container wow bounceInDown" data-wow-duration="5s">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 text-center slide-text">
			<h1>ERP System</h1>
			<p>Here your organization can make all the necessary transactions easily and manage them with minimal effort</p>
		</div><!-- End col-md-8-->
		<div class="col-md-offset-2"></div><!-- End col-md-offset-2 -->
	</div><!-- End Row -->
</div><!-- End Contanier -->

</div><!-- End header-div -->

<!-- Feature -->

<div class="container" id="features">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>Features</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->

	<div class="row">
		<div class="col-md-3 col-sm-6">
			<div class="features-div">
			   <i class="fa fa-mobile"></i>
			   <h4>User Friendly</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
			</div>
		</div><!-- End col-md-3-->
		<div class="col-md-3 col-sm-6">
			<div class="features-div">
			   <i class="fa fa-code"></i>
			   <h4>Easy to Manage</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
			</div>
		</div><!-- End col-md-3-->
		<div class="col-md-3 col-sm-6">
			<div class="features-div">
			   <i class="fa fa-life-ring"></i>
			   <h4>24/7 Support</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
			</div>			
		</div><!-- End col-md-3-->
		<div class="col-md-3 col-sm-6">
			<div class="features-div">
			   <i class="fa fa-pencil"></i>
			   <h4>Modern Design</h4>
			   <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
			</div>			
		</div><!-- End col-md-3-->
	</div><!-- End row -->
</div><!-- End Container -->

<div class="more-feature-div">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="images/macbook.png">
			</div><!-- End col-md-6-->
			<div class="col-md-6">
				<div class="more-features-div">
					<div class="more-features-div-icon"><i class="fa fa-rocket"></i></div>
					<h3 class="more-features-div-heading">Quick Install</h3>
					<div class="more-features-div-description">
	            		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.
	            		Ut wisi enim ad minim veniam, quis nostrud.
	            	</div>
				</div>

				

			</div><!-- End col-md-6-->
		</div><!-- End row -->
	</div><!-- ENd container -->
</div>

<!-- End Feature -->


<!-- Services -->

<div class="container" id="Services">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>Products</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->

	
	<div class="card col-md-3 col-sm-6 col-lg-3" style="width: 25rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Product 1</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  
</div>
<div class="card col-md-4 col-sm-6 col-lg-3" style="width: 25rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Product 2</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  
</div>
<div class="card col-md-4 col-sm-6 col-lg-3" style="width: 25rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Product 3</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  
</div>
<div class="card col-md-4 col-sm-6 col-lg-3" style="width: 25rem; ">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Product 4</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Cras justo odio</li>
    <li class="list-group-item">Dapibus ac facilisis in</li>
    <li class="list-group-item">Vestibulum at eros</li>
  </ul>
  
</div>


</div><!-- End container -->

<!-- End Services -->

<!-- Call to Action -->
<div class="call-action-bg" id="Call-to-Action">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main_heading">
					<h1>Call to Action</h1>
					<div  class="text-center"><span class="underline"></span></div>
				</div>
			</div><!-- End col-md-12 -->
		</div><!-- End row -->

		<div class="col-md-12">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
		</div><!-- End col-md-12-->

	</div><!-- End container -->	
</div>

<!-- End Call to Action -->

<!-- Price Table -->

<div class="container" id="Price">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>Price Table</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->

	<div class="row">
		<div class="col-md-4">
			<div class="pricing-box">
				<div class="pricing-box-price"><span>$ </span><strong>12</strong><span> / month</span></div>
			    <h3>Basic</h3>
			    <h4>Freelancer</h4>
			    <div class="pricing-box-features">
			    	<ul>
			    		<li>1000 video lessons</li>
			    		<li>Normal speed</li>
			    		<li>500 solved exercises</li>
			    		<li>300MB to save your code</li>
			    		<li>750 hours of support</li>
			    	</ul>
			    </div>
			    <div class="pricing-box-sign-up">
			    	<a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
			    </div>
			</div>
		</div><!-- End col-dm-4 -->
		<div class="col-md-4 pricing-box-best">
			<div class="pricing-box">
            	<div class="pricing-box-price">
            		<span>$ </span><strong>35</strong><span> / month</span>
            	</div>
                <h3>Ultimate</h3>
                <h4>Best value</h4>
                <div class="pricing-box-features">
                	<ul>
                		<li>3000 video lessons</li>
                		<li>2x speed</li>
                		<li>2000 solved exercises</li>
                		<li>500MB to save your code</li>
                		<li>900 hours of support</li>
                	</ul>
                </div>
                <div class="pricing-box-sign-up">
                	<a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
                </div>
            </div>
		</div><!-- End col-dm-4 -->
		<div class="col-md-4">
			<div class="pricing-box">
            	<div class="pricing-box-price"><span>$ </span><strong>75</strong><span> / month</span></div>
                <h3>Platinum</h3>
                <h4>Big company</h4>
                <div class="pricing-box-features">
                	<ul>
                		<li>5000 video lessons</li>
                		<li>4x speed</li>
                		<li>4000 solved exercises</li>
                		<li>900MB to save your code</li>
                		<li>Unlimited hours of support</li>
                	</ul>
                </div>
                <div class="pricing-box-sign-up">
                	<a class="btn btn-link-1 scroll-link" href="#top-content">Sign up</a>
                </div>
            </div>
		</div><!-- End col-dm-4 -->
	</div><!-- End row -->

</div><!-- End container -->

<!-- End Price Table -->

<!-- About -->
<div class="container" id="About">
	<div class="row">
		<div class="col-md-12">
			<div class="main_heading">
				<h1>About us</h1>
				<div  class="text-center"><span class="underline"></span></div>
			</div>
		</div><!-- End col-md-12 -->
	</div><!-- End row -->


	<div class="row">
		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="images/1.jpg" alt="">
		    	<div class="about-us-role">Marketing</div>
		    </div>
		    <h3>John Doe</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>

		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="images/2.jpg" alt="">
		    	<div class="about-us-role">Marketing</div>
		    </div>
		    <h3>John Doe</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>

		<div class="col-md-4 about-us-box wow fadeInUp animated">
		    <div class="about-us-photo">
		    	<img src="images/3.jpg" alt="">
		    	<div class="about-us-role">Marketing</div>
		    </div>
		    <h3>John Doe</h3>
		    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
		</div>
	</div><!-- End row -->

</div><!-- End container -->	
<!-- End About -->


<!-- Testimonial -->
<div class="call-action-color" id="Testimonial">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="main_heading">
					<h1>Testimonial</h1>
					<div  class="text-center"><span class="underline"></span></div>
				</div>
			</div><!-- End col-md-12 -->
		</div><!-- End row -->

		<div class="col-md-12">
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
		</div><!-- End col-md-12-->

	</div><!-- End container -->	
</div>

<!-- End Testimonial -->

<!-- Footer -->
<footer>
    <div class="container">
    	<div class="row">
            <div class="col-sm-12 footer-social">
            	<a href="#"><i class="fa fa-facebook"></i></a>
		    	<a href="#"><i class="fa fa-dribbble"></i></span></a>
		        <a href="#"><i class="fa fa-twitter"></i></a>            	
            	<a href="#"><i class="fa fa-instagram"></i></a>
            	<a href="#"><i class="fa fa-google-plus"></i></a>
            	<a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 footer-copyright">
            	© Import Template by <a href="http://templatestock.co">Template Stock</a>.
            </div>
        </div>
    </div>
</footer>
<!-- End Footer -->


<script type="text/javascript" src="js/jquery-main.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script src="js/wow.min.js"></script>

<script>
	new WOW().init();
</script>

</body>
</html>