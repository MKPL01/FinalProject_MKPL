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
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<!-- for bootstrap working -->
    <script type="<?php echo base_url();?>assets/text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-3.1.1.min.js"></script>
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
                    <h1><a href="#">JadiMasak </a></h1>
                </div>
        </div>
 <!--/.navbar-header-->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
            <li><a href="<?php echo site_url('C_Admin/index');?>">Home</a></li>
            <li><a href="<?php echo site_url('C_Admin/listresep');?>">List Resep</a></li>
            <li><a href="<?php echo site_url('C_Admin/inputbarang');?>">Tambah Resep</a></li>
            <li><a href="<?php echo site_url('C_Admin/list_order');?>">List Pesanan</a></li> 

            </ul>
        </div>
        <!--/.navbar-collapse-->
	</nav>
	<!--form-->
	<section id="form" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
                 <div class="col-md-12">
                    <form action="<?php echo site_url('C_Admin/posting/'.$this->session->userdata('id')); ?>" class="form-horizontal" method="post" enctype="multipart/form-data">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>Form Input Resep</strong></h3>
                            </div>
                            <div class="panel-body">
                            <p></p>
                            </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nama Resep Masakan</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="namaresep" required="required"/>
                                    </div>
                                </div>
                            </div>

                             <div class="form-group">
                                <label class="col-md-3 control-label">Harga</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="harga" required="required"/>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label class="col-md-3 control-label">Kategori</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <span class="selection-box"><select class="domains valid" name="kategori"  required="required">
                                        <option>Indonesia</option>
										   <option>Cina</option>
                                           <option>Western</option>
									   </select></span></p>
                                    </div>
                                </div>
                            </div>

                          <div class="form-group">
                                <label class="col-md-3 control-label">Stock</label>
                                <div class="col-md-9">
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pencil"></span></span>
                                        <input type="text" class="form-control" name="stock" required="required"/>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Deskripsi</label>
                                <div class="col-md-9 col-xs-12">
                                    <textarea class="form-control" rows="5" name="deskripsi" required="required"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Gambar</label>
                                    <div class="col-md-9">
                                    <input type="file" class="fileinput btn-primary" name="userfile" id="filename" title="Choose file"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-footer">
                    <button class="btn btn-primary pull-right">Submit</button>
                </div>
            </div>
        </form>

    </div>
</div>
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