<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

    <link href='https://fonts.googleapis.com/css?family=Open+Sans300,400,700,800&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700,500,900&subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/bootstrap/css/bootstrap.min.css" media="all" />
    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/font-awesome-4.7.0/css/font-awesome.min.css" media="all" />
    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/css/flexslider.css" media="all" />
    <link rel="stylesheet" href="<?php  echo get_theme_file_uri(); ?>/assets/css/hoathuyet.css" media="all" />
    <script src="<?php  echo get_theme_file_uri(); ?>/assets/js/jquery-2.1.4.min.js"></script>
    <script src="<?php  echo get_theme_file_uri(); ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script language="javascript" type="text/javascript" src="<?php  echo get_theme_file_uri(); ?>/assets/js/mouseWhell.js"></script>
    <script src="<?php  echo get_theme_file_uri(); ?>/assets/js/jquery.flexslider-min.js"></script>
    <script src="<?php  echo get_theme_file_uri(); ?>/assets/js/common.js"></script>
</head>
<body <?php body_class(); ?> >

