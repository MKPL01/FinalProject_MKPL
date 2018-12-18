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
	<!--/.navbar-->
</div>
</div>
		</div>
<section>
		  <div class="container">
<?php echo form_open('C_Member/update_cart'); ?>
<table cellpadding="6" cellspacing="1" style="width:50%" border="1" class="table-striped table-bordered table-hover" id="cart">
<thead>
<tr>
        <th></th>
        <th>Jumlah</th>
        <th>Nama Resep</th>
        <th style="text-align:right">Harga</th>
        <th style="text-align:right">Total</th>
</tr>
</thead>
<?php $i = 1; ?>

<?php foreach ($this->cart->contents() as $items): ?>

        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>

        <tr>
            <td><?php echo anchor('C_Member/delete_resep_cart/'.$items['rowid'],'Delete');?></td>
                <td><?php echo form_input(array('name' =>'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
                <td>
                        <?php echo $items['name']; ?>

                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

                                <p>
                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

                                        <?php endforeach; ?>
                                </p>

                        <?php endif; ?>

                </td>
                <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['price']); ?></td>
                <td style="text-align:right">Rp <?php echo $this->cart->format_number($items['subtotal']); ?></td>
        </tr>

<?php $i++; ?>

<?php endforeach; ?>
<tr>
        <td colspan="3"> </td>
        <td class="right"><strong>Total</strong></td>
        <td class="right" style="text-align:right">Rp <?php echo $this->cart->format_number($this->cart->total()); ?></td>
</tr>


</table>

<div>

<div class="col-sm-10-right ">
	<br>
	<?php echo form_submit('', 'Update Cart',['class'=>'btn btn-default']); ?>
       <?= anchor('C_Member/check_out','Check Out',['class'=>'btn btn-success']) ?>
      </div>
</body>
<script>$(document).ready(function(){
    $('#cart').DataTable();
});</script> 
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