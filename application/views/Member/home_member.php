<!DOCTYPE html>
<html>
<head>
<title>JadiMasak</title>
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1"><!--supaya responsive, fleksibel, dengan skala 1:1-->
<meta charset="utf-8" /><!-- mendeskripsikan bit2 html -->
<!--webfont-->
<!-- for bootstrap working -->
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- cart -->
	<script src="<?php echo base_url();?>assets/js/simpleCart.min.js"> </script>
<!-- cart -->
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="<?php echo site_url('C_Login/logout') ?>"><span class="glyphicon glyphicon-user"> </span>Logout</a>
						<li><a href="<?php echo site_url('C_Member/lihatprofile') ?>"><span class="glyphicon glyphicon-user"> </span><?php echo $datauser->first_name?></a></		
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
	<div class="inner-banner">
		<div class="container">
			<div class="banner-top inner-head">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="#">JadiMasak </a></h1>
				</div>
	    </div>
	    <!--/.navbar-header-->
		     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
	           <li><a href="<?php echo site_url('C_Member/index') ?>">Home</a></li>
	           <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-1">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="<?php echo site_url('C_Member/filter_kategoriindonesia') ?>">Indonesia</a></li>
						            <li><a href="<?php echo site_url('C_Member/filter_kategoricina') ?>">Cina</a></li>
						            <li><a href="<?php echo site_url('C_Member/filter_kategoriwestern') ?>">Western</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
					<li><a href="<?php echo site_url('C_Member/view_invoice') ?>">List Pesanan</a></li>
					<li><a href="<?php echo site_url('C_Member/view_cart') ?>">Keranjang</a></li>
	        </ul>
	    </div>	    
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
			</div>
			</div>
		</div>

		<div class="banner">
		<div class="container">
			<div class="banner-bottom">
			<div class="banner-bottom-left">
				<h2>B<br>U<br>Y</h2>
			</div>
				<div class="banner-bottom-right">
					<div  class="callbacks_container">
					<ul class="rslides" id="slider4">
					<li>
								<div class="banner-info">
									<h3>JadiMasak</h3>
									<p>JadiMasak adalah sistem order resep masakan berbasis web yang bertujuan untuk memudahkan orang-
									orang yang ingin memasak tetapi minim pengetahuan</p>
								</div>
							</li>
							<li>
								<div class="banner-info">
								   <h3>Get You Receipt Here!</h3>
									<p>Delicious and Easy to cook</p>
								</div>
							</li>
						
						</ul>
					</div>
					<!--banner-->
	  			<script src="<?php echo base_url();?>assets/js/responsiveslides.min.js"></script>
			 	<script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager:true,
			        nav:false,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
	</div>
	<div class="clearfix"> </div>
	</div>
	</div>
		</div>


		<!-- <!-- <!-- <!-- content-section-starts-here -->
		<div class="other-products">
		<div class="container">
			<h3 class="like text-center">Top Receipt</h3>
			<ul id="flexiselDemo3">
				    
				     </ul>        			
				    <script type="text/javascript">
					 $(window).load(function() {
						$("#flexiselDemo3").flexisel({
							visibleItems: 4,
							animationSpeed: 800,
							autoPlay: true,
							autoPlaySpeed: 3000,    		
							pauseOnHover: true,
							enableResponsiveBreakpoints: true,
					    	responsiveBreakpoints: { 
					    		portrait: { 
					    			changePoint:480,
					    			visibleItems: 1
					    		}, 
					    		landscape: { 
					    			changePoint:640,
					    			visibleItems: 2
					    		},
					    		tablet: { 
					    			changePoint:768,
					    			visibleItems: 3
					    		}
					    	}
					    });
					    
					});
				   </script>
				   <script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.flexisel.js"></script>
				   </div>
				   </div>
			</div> -->
		<div class="container">
			<div class="main-content">
				<div class="online-strip">
					<div class="col-md-6 follow-us">
						<h3>Follow us : <a class="twitter" href="#"></a><a class="facebook" href="#"></a></h3>
					</div>
					<div class="col-md-6 online-order">
						<p>Order online</p>
						<h3>Telp: +6222-7654-0301 </h3> 
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
				
				<div class="clearfix"></div>
				</div>
		  </div>
		  <div class="copyright text-center">
				<p>© 2017 JadiMasak</p>
		  </div>
		</div>
		</div>
</body>
</html>