<?php
/**
 * The Header for our theme.
 *
 * @package WordPress
 * @subpackage Sandbox
 * @since Sandbox 2.0
 */
?><!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<title>
	Supple <?php wp_title('|'); ?>
</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>">
<!-- <link rel="stylesheet" href="<?php bloginfo(template_url); ?>/styles/layout.css"> -->

 
	<!-- build:css(.tmp) styles/main.css -->
	<link rel="stylesheet" href="<?php bloginfo(template_url); ?>/app/styles/screen.css">
	<!-- endbuild -->
	<!-- build:js scripts/vendor/modernizr.js -->
	<script src="<?php bloginfo(template_url); ?>/app/bower_components/modernizr/modernizr.js"></script>
	<!-- endbuild -->


<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="shortcut icon" href="<?php bloginfo('url'); ?>/favicon.ico">
<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<section class="outer-wrapper">
		
		<header>
			<section class="header-inner inner-wrapper row">
				
				<div class="nav-container left-nav span_4">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'left-nav' ) ); ?>
				</div><!-- / end left nav container -->

				<div class="logo-container span_4">
					<a href="/" title="Supple">
						
						<img src="<?php bloginfo(template_directory); ?>/images/logo.jpg" alt="Supple" />
					
					</a><!-- / end supple link -->
				</div><!-- / end logo container -->

				<div class="nav-container right-nav span_4 right">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu' => 'right-nav' ) ); ?>
				</div><!-- / end right nav container -->
				

			</section><!-- / end inner header -->
		</header><!-- / end header -->
		

