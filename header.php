<?php
session_start();
require_once('inc/config.inc.php');
$link = $_SERVER['REQUEST_URI'];
$arr_link = explode("/", $link); $l = end($arr_link);
$link_translte = isset($arr_en[$l]) ? $arr_en[$l] : 'homepage.html';
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="UTF-8"/>
	<title>SouthernRCT - Công ty hợp danh Nghiên cứu - Tư vấn - Đào tạo PHƯƠNG NAM</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400,700%3Alatin%7CMontserrat%3A700%3Alatin"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/prettyPhoto.css"/>
	<link rel="stylesheet" type="text/css"  href="style-switcher/assets/css/main.css"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/isotope.js"></script>
	<script type="text/javascript" src="js/imagesloaded.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.24530.js"></script>
	<!--<script type='text/javascript' src='js/jquery.themepunch.essential.min.js'></script>-->
</head>
<body class="home page">
<div class="boxed-container">
<header class="header">
	<div class="container">
		<div class="logo">
			<a href="index.html">
				<img src="images/logo_back.png" alt="SoutherRCT" class="img-responsive"/>
			</a>
		</div>
		<div class="header-widgets  header-widgets-desktop">
			<div class="widget  widget-icon-box">	
				<div class="icon-box">
					<i class="fa  fa-phone  fa-3x"></i>
					<div class="icon-box__text">
						<h4 class="icon-box__title">02963 989.101</h4>
						<span class="icon-box__subtitle">info@southernrct.com</span>
					</div>
				</div>
			</div>
			<div class="widget  widget-icon-box">	
				<div class="icon-box">
					<i class="fa fa-home fa-3x"></i>
					<div class="icon-box__text">
						<h4 class="icon-box__title">666/34 Trần Hưng Đạo, P. Bình Khánh</h4>
						<span class="icon-box__subtitle">Tp. Long Xuyên, An Giang (Lầu 2)</span>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Toggle Button for Mobile Navigation -->
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#buildpress-navbar-collapse">
			<span class="navbar-toggle__text">MENU</span>
			<span class="navbar-toggle__icon-bar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</span>
		</button>
	</div>
	<div class="sticky-offset js-sticky-offset"></div>
	<div class="container">
		<div class="navigation">
			<div class="collapse navbar-collapse" id="buildpress-navbar-collapse">
				<ul id="menu-main-menu" class="navigation--main">
					<li class="current-menu-item">
						<a href="index.html">Trang chủ</a>
						<ul class="sub-menu">
							<li><a href="su-kien-gan-day.html">Sự kiện gần đây</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="#" onclick="return false;">Về chúng tôi</a>
						<ul class="sub-menu">
							<li><a href="tam-nhin-su-menh-gia-tri.html">Tầm nhìn - Sứ mệnh - Giá trị</a></li>
							<li><a href="nhan-su.html">Nhân sự</a></li>
						</ul>
					</li>
					<li class="menu-item-has-children">
						<a href="#" onclick="return false;">Dịch vụ</a>
						<ul class="sub-menu">
							<li><a href="dich-vu-nghien-cuu-tu-van-kinh-te.html">Nghiên cứu - Tư vấn Kinh tế</a></li>
							<li><a href="dich-vu-nghien-cuu-tu-van-kinh-doanh.html">Nghiên cứu - Tư vấn Kinh doanh</a></li>
							<li><a href="dich-vu-dao-tao.html">Đào tạo</a></li>
						</ul>
					</li>
					<li><a href="duan.html">Nghiên cứu-Dự án</a></li>
					<li><a href="daotao.html">Đào tạo</a></li>
					<!--<li class="menu-item-has-children">
						<a href="tin-tuc.html">Tin tức - Sự kiện</a>
						<ul class="sub-menu">
							<li><a href="tin-tuc.html?cat=duan">Dự án</a></li>
							<li><a href="tin-tuc.html?cat=daotao">Đào tạo</a></li>
						</ul>
					</li>-->

					<li><a href="lien-he.html">Liên hệ</a></li>
				</ul>	
			</div>
			<div class="pull-right languages_block">
				<a href="<?php echo $l; ?>"><img src="images/vn.png" width="30px" /></a>&nbsp;&nbsp;
				<a href="<?php echo $link_translte; ?>"><img src="images/en.png" width="30px" /></a>
			</div>
		</div>
	</div>
</header>