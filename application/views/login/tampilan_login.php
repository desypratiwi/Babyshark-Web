<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | BABYSHARK</title>
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
</head><!--/head-->

<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +62 85105369987</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> babyshark.com</a></li>
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
						<div  >
							<a href="home"><img src="<?php echo base_url()?>asset/images/home/a3.jpg" alt="" style="display: block;margin-left: auto;margin-right: auto;width: 20%;" /></a>
						</div>
				</div>
			</div>
		</div><!--/header-middle-->
	</header><!--/header-->

<body>
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="<?php echo site_url('login/cek_login') ?>" method="post">
							<input type="text" name="email" placeholder="Email" />
							<input type="password" name="password" placeholder="Password" />
							<!--<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in
							</span>-->
							<?php
							$tesLogin = $this->session->flashdata('gagal_login');
							//echo $tesLogin;
							if($tesLogin == 'gagal'){
								echo '<div class="alert alert-danger" role="alert">Oh no! Wrong Username or Password</div>';
							}?>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				<div class="col-sm-4">
					<div class="signup-form"><!--sign up form-->
						<h2>New User Signup!</h2>
						<form action="<?php echo site_url('/register/daftar')?>" method="POST">
							<input name="username" type="text" placeholder="Username"/>
							<input name="password" type="password" placeholder="Password"/>
							<input name="nama" type="text" placeholder="Nama"/>
							<input name="alamat" type="text" placeholder="Alamat"/>
							<input name="email" type="email" placeholder="Email"/>
							<input name="no_telp" type="text" placeholder="No Telp"/>
							<button type="submit" class="btn btn-default">Signup</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->
	

  
    <script src="<?php echo base_url().'asset/js/';?>jquery.js"></script>
	<script src="<?php echo base_url().'asset/js/';?>price-range.js"></script>
    <script src="<?php echo base_url().'asset/js/';?>jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url().'asset/js/';?>bootstrap.min.js"></script>
    <script src="<?php echo base_url().'asset/js/';?>jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url().'asset/js/';?>main.js"></script>
</body>
</html>