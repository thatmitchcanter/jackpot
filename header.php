<?php
/**
 * @package WordPress
 * @subpackage Downbeat
 */
 ?>  
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html <?php language_attributes(); ?>> 
 <!--<![endif]-->
<head>

	<!-- ===== Basic Meta / Setup ===== -->
	<meta charset="utf-8">
	<title><?php wp_title('|',true,'right'); ?><?php bloginfo('name'); ?></title>
	<meta name="description" content="<?php bloginfo('description'); ?>" />
	<meta name="author" content="">

	<!-- ===== Responsive Viewport Setup ===== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- ===== Stylesheets ===== -->
	<link rel="stylesheet" href= "<?php echo get_stylesheet_uri(); ?>">    

	<!-- ===== HTML5 SHIV ===== -->
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- ===== Favicons & Apple Dock Icons ===== -->
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/apple-touch-icon-114x114.png">

	<?php wp_head(); ?>   
	     
</head>
<body <?php body_class(); ?>>