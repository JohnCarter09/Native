<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="utf-8">
	        <meta http-equiv="X-UA-Compatible" content="IE=edge">
	        <title>Infinity Coming Soon Bootstrap 4 Template </title>
	        <meta name="description" content="">
	        <meta name="viewport" content="width=device-width, initial-scale=1">

	        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	        
	        <!-- Fonts -->
	        <!-- Source Sans Pro -->
	        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400i|Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	        
	        <!-- CSS -->

	        <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	        <!-- Bootstrap CDN -->
	        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
	        

	        <link rel="stylesheet" <?php echo get_template_directory_uri(); ?> href="css/themefisher-fonts.css">
	        <link rel="stylesheet"<?php echo get_template_directory_uri(); ?> href="css/font-awesome.min.css">
	        <link rel="stylesheet"<?php echo get_template_directory_uri(); ?> href="css/owl.carousel.css">
	        <link rel="stylesheet"<?php echo get_template_directory_uri(); ?> href="css/animate.css">
	        <link rel="stylesheet"<?php echo get_template_directory_uri(); ?> href="css/style.css">
	        <!-- Responsive Stylesheet -->
	        <link rel="stylesheet" href="css/responsive.css">

		<?php wp_head(); ?>
	</head>
</html>

