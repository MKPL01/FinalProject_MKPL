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
						
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- header-section-ends -->
				<div class="banner-top">
		<div class="container">
				<nav class="navbar navbar-default" role="navigation">
	    <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
				<div class="logo">
					<h1><a href="index.html">JadiMasak</a></h1>
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
                                    <li><a href="<?php echo site_url('C_Member/filter_kategoriwestern') ?>">Korea</a></li>
                                    <li><a href="<?php echo site_url('C_Member/filter_kategoriwestern') ?>">Jepang</a></li>
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
	<section id="form" style="margin-top: 50px;"><!--form-->
		 <form action="<?php echo site_url('C_Member/editprofile/'.$user->id)?>" class="form-horizontal" method="post" enctype="multipart/form-data">
        <div class="panel-heading">
        <span> <h3 class="col-sm-7 col-sm-offset-6 panel-title">Edit Member</h3></span>
        </div>
    <p></p>
    <div class="row">
    <div class="col-sm-7 col-sm-offset-3">
            
            <div class="panel-body tab-content">
                    <div class="tab-pane active" id="tab-first">
                        <p></p>

                        <div class="form-group">
                            <label class="col-md-3 control-label">First Name</label>
                                <div class="col-md-8 col-xs-12">
                                <input type="text" class="form-control" name="firstnamebr" value="<?php echo $user->first_name?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Last Name</label>
                                <div class="col-md-8 col-xs-12">
                                <input type="text" class="form-control" name="lastnamebr" value="<?php echo $user->last_name?>"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Alamat</label>
                                <div class="col-md-8 col-xs-12">
                                <input type="text" class="form-control" name="alamat" value="<?php echo $user->alamat?>"/>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Kecamatan</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <span class="selection-box"><select class="domains valid" name="kecamatan"  required="required">
                                        <option>Klojen</option>
                                           <option>Lowokwaru</option>
                                       </select></span></p>
                                    </div>
                                </div>
                            </div>
                        <div class="form-group">
                            <label class="col-md-3  control-label">Mobile Number</label>
                            <div class="col-md-8 col-xs-12">
                                <input type="text" class="form-control" name="mobilenumberbr" value="<?php echo $user->mobile_number?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Username</label>
                            <div class="col-md-8 col-xs-12">
                                <input type="text" class="form-control" name="usernamebr" value="<?php echo $user->username?>"/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-3 control-label">Email</label>
                            <div class="col-md-8 col-xs-12">
                                <input type="text" class="form-control" name="emailbr" value="<?php echo $user->email?>"/>
                            </div>
                        </div>

                       
                         <div class="form-group">
                            <input type="hidden" name="level" value="Member">
                        </div>
                        <button class="btn btn-primary pull-right">Submit</button>
                        <p></p>
                    </div>
                </form>
                    </section>
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