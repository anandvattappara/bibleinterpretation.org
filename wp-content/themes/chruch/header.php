<?php
/**
 * The header for bibleinterpretation.org theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage bibleinterpretation.org
 * @since bibleinterpretation.org 1.0
 */
?>		
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php if(is_home()){ echo 'Knanaya Global Foundation NFP makes Knanaya resources available online here';}else{ wp_title('');} echo ' | ';  bloginfo( 'name' ); ?></title>
	<link href="<?PHP echo get_template_directory_uri()?>/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="<?PHP echo get_template_directory_uri()?>/assets/css/biblestyle.css" rel="stylesheet" type="text/css" />
	<link href="<?PHP echo get_template_directory_uri()?>/assets/fontawesome/css/fontawesome.css" rel="stylesheet">
  	<link href="<?PHP echo get_template_directory_uri()?>/assets/fontawesome/css/brands.css" rel="stylesheet">
  	<link href="<?PHP echo get_template_directory_uri()?>/assets/fontawesome/css/solid.css" rel="stylesheet">
	<link rel="icon" href="<?PHP echo get_template_directory_uri()?>/assets/images/favicon.png"/>
	<?php wp_head(); ?>
</head>
<body>
   