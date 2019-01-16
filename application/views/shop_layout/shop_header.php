<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | BABYSHARK</title>
    <link href="<?php echo base_url().'asset/css/';?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'asset/css/';?>font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url().'asset/css/';?>prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url().'asset/css/';?>price-range.css" rel="stylesheet">
    <link href="<?php echo base_url().'asset/css/';?>animate.css" rel="stylesheet">
	<link href="<?php echo base_url().'asset/css/';?>main.css" rel="stylesheet">
	<link href="<?php echo base_url().'asset/css/';?>responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="<?php echo base_url().'asset/js/';?>html5shiv.js"></script>
    <script src="<?php echo base_url().'asset/js/';?>respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url().'asset/images/';?>ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url().'asset/images/';?>ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url().'asset/images/';?>ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url().'asset/images/';?>ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url().'asset/images/';?>ico/apple-touch-icon-57-precomposed.png">
    
    <script type="text/javascript">
    	$("#search").on('keyup', function (e) {
    		if (e.keyCode == 13) {
        	var term = document.getElementById("search").value;
        	var link = "<?php echo site_url('c_shop/search'); ?>";
        	var linkmerged = link + term;
        	window.location.href = linkmerged;
    	}
	});
    </script>

</head><!--/head-->

<body>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="<?php echo base_url().'asset/images/';?>home/a2.jpg" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									USA
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canada</a></li>
									<li><a href="#">UK</a></li>
								</ul>
							</div>
							
							<div class="btn-group">
								<button type="button" class="btn btn-default dropdown-toggle usa" data-toggle="dropdown">
									DOLLAR
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu">
									<li><a href="#">Canadian Dollar</a></li>
									<li><a href="#">Pound</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-user"></i> Account</a></li>
								<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
								<li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li>
								<li><a href="<?php echo base_url().'index.php/c_cart'; ?>"><i class="fa fa-shopping-cart"></i> Cart</a></li>
								<?php 
								$sessionLogin = $this->session->userdata('isLogin');
								//echo $sessionLogin;die;
								if( $sessionLogin == 'udahLogin'){
									echo '<li><a href="'.site_url("login/logout").'"><i class="fa fa-lock"></i> Logout</a></li>';
									
									
								}else{
									echo '<li><a href="'.site_url("login").'"><i class="fa fa-lock"></i> Login</a></li>';
								}?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="home" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="shop.html">Products</a></li>
										<li><a href="product-details.html">Product Details</a></li> 
										<li><a href="checkout.html">Checkout</a></li> 
										<li><a href="<?php echo base_url().'index.php/c_cart'; ?>">Cart</a></li> 
										<li><a href="login.html">Login</a></li> 
                                    </ul>
                                </li> 
								<li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> 
								<li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3">
							<form action="<?php echo base_url().'index.php/c_shop/search' ?>" method="POST"><table>
						<tr><td><div class="search_box pull-right">
							<input type="text" name="search" placeholder="Search"/>
						</div></td>
							<td><input type="submit" value="SEARCH"></td>
						</tr>
							</table>
							</form>
						
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	
	<section>
		<div class="container">
			<div class="row">
				
				