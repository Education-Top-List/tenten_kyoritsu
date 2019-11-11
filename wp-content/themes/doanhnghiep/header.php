<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); ?></title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo BASE_URL; ?>/images/favicon.ico">
	<?php $url_site =  get_site_url('null','/wp-content/themes/doanhnghiep', 'http');  ?>
	<!-- css -->
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/slick.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/animate.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo BASE_URL; ?>/css/style.css">
	<!-- js -->
	<script src="<?php echo BASE_URL; ?>/js/jquery.min.js"></script>
	<?php wp_head(); ?>

</head>
<body <?php body_class() ?>>
	<div class="bg_opacity"></div>
	<?php if ( wp_is_mobile() ) { ?>
		<div id="menu_mobile_full">
			<nav class="mobile-menu">
				<p class="close_menu"><span><i class="fa fa-times" aria-hidden="true"></i></span></p>
				<?php 
				$args = array('theme_location' => 'menu_mobile');
				?>
				<?php wp_nav_menu($args);?>
			</nav>
		</div>
	<?php }?>
	<header class="header">
		<div class="top_header">
			<!-- display account top_header mobile -->
			<span class="icon_mobile_click"><img src="<?php echo BASE_URL; ?>/images/icon_mb_click.png"></span>
			<div class="container">
				<div class="phone_hour_hd">
					<ul>
						<li><a href="#">+84 3656 4567  </a></li>
						<li><a href="#">Mon - Fri 09:00 - 17:00 </a></li>
					</ul>
				</div>
				<div class="tg_lang">
					<ul>
						<li><a href="#">Tieng Viet</a></li>
						<li><a href="#">English </a></li>
						<li><a href="#">日本語</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="middle_header">
			<div class="container">
				<div class="logo_site">
					<?php 
					if(has_custom_logo()){
						the_custom_logo();
					}
					else { ?> 
						<h2><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h2>
					<?php } ?>
				</div>
				<div class="commit_hd">
					<ul>
						<li><strong>Ceritified</strong><p>ISO 9001:2008</p></li>
						<li><strong>The Best</strong><p>#1 IN JAPAN</p></li>
						<li><strong>Number #1</strong><p>SUPLIER IN REGION</p></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bottom_header">
			<div class="container">
					<nav class="nav nav_primary">
					<?php 
					$args = array('theme_location' => 'primary');
					?>
					<?php wp_nav_menu($args); ?>
			</nav>
			</div>
		</div>
		<?php if(is_front_page() && !is_home()){ ?>
			<?php echo do_shortcode('[metaslider id="31"]'); ?>
		<?php }?>
	</header>