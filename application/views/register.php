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
<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
</head>
<body>
	<!-- header-section-starts -->
	<div class="header">
		<div class="header-top-strip">
			<div class="container">
				<div class="header-top-left">
					<ul>
						<li><a href="<?php echo site_url('C_Login/masuk') ?>"><span class="glyphicon glyphicon-user"> </span>Login</a></li>
						<li><a href="<?php echo site_url('main_user/daftar') ?>"><span class="glyphicon glyphicon-lock"> </span>Create an Account</a></li>		
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
	           <li><a href="<?php echo site_url('main_user/index') ?>">Home</a></li>
	           <li class="dropdown">
		        	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Kategori<b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-1">
			            <div class="row">
				            <div class="col-sm-6">
					            <ul class="multi-column-dropdown">
									<h6>NEW IN</h6>
						            <li><a href="<?php echo site_url('main_user/filter_kategoriindonesia') ?>">Indonesia</a></li>
						            <li><a href="<?php echo site_url('main_user/filter_kategoricina') ?>">Cina</a></li>
						            <li><a href="<?php echo site_url('main_user/filter_kategoriwestern') ?>">Western</a></li>
						            <li><a href="<?php echo site_url('main_user/filter_kategoriwestern') ?>">Korea</a></li>
						            <li><a href="<?php echo site_url('main_user/filter_kategoriwestern') ?>">Jepang</a></li>
					            </ul>
				            </div>
							<div class="clearfix"></div>
			            </div>
		            </ul>
		        </li>
		        <li>
            		<?php echo form_open('main_user/searching') ?>
                	<input type="text" name="keyword" placeholder="cari resep" style="width: 240px">
                	<input type="submit" name="search_submit" value="Cari">
                	<?php echo form_close() ?>
				</li>
	        </ul>
	    </div>	    
	    <!--/.navbar-collapse-->
		<!-- registration-form -->
<div class="registration-form"
	<div class="container">
	<div class="dreamcrub">
			   	 <ul class="breadcrumbs">
                    <li class="home">
                      <a href="<?php echo site_url('main_user/index') ?>" title="Go to Home Page">Home</a>&nbsp;
                       <span>&gt;</span>
                    </li>
                    <li class="women">
                       Registration
                    </li>
                </ul>
                <div class="clearfix"></div>
			   </div>
		<h2>Registration</h2>
		<div class="registration-grids">
			<div class="reg-form">
				<div class="reg">
					 <form action="<?php echo site_url('main_user/adduser'); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
						 <ul>
						<ul>
							 <li class="text-info">First Name: </li>
							 <li><input type="text" name="first_name" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Last Name: </li>
							 <li><input type="text" name="last_name" value=""></li>
						 </ul>	
						 <ul>
							 <li class="text-info">Alamat: </li>
							 <li><input type="text" name="alamat" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Kecamatan:</li>
							 <li>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <span class="selection-box"><select class="domains valid" name="kecamatan"  required="required">
                                        <option>Klojen</option>
                                           <option>Lowokwaru</option>
                                       </select></span></p>

                                </div>	  </li>
						<ul>
							 <li class="text-info">Email: </li>
							 <li><input type="text" name="email" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Username</li>
							 <li><input type="text" name="username" value=""></li>
						 </ul>
						 <ul>
							 <li class="text-info">Password: </li>
							 <li><input type="password" name="password" value=""></li>
						 </ul>

						 <ul>
							 <li class="text-info">Mobile Number:</li>
							 <li><input type="text" name="mobile_number" value=""></li>
						 </ul>	
						 <ul>
							<li><input type="hidden" name="level" value="Member"></li>
						 </ul>
						 <input type="submit" value="REGISTER NOW">
					 </form>
				 </div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- registration-form -->
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