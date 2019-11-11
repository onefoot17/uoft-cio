<?php
/**
 * Header - U of T Bootstrap 3
 * Displays all of the <head> section and everything up till <main id="main">
 * @package uoft_bootstrap3
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/_inc/img/favicon-16X16.png" sizes="16x16">
<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/_inc/img/favicon-32X32.png" sizes="32x32">

<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_inc/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700|Roboto:100,300,300i,400,400i,500i" rel="stylesheet"> 
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/_inc/css/uoft-theme.css">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="<?php echo get_template_directory_uri(); ?>/_inc/js/html5shiv.js"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/_inc/js/respond.min.js"></script>
<![endif]-->

<?php wp_head(); ?>
<!-- IE update message -->
<!--[if lt IE 9]>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/_inc/ie/ie.min.css" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/_inc/ie/ie.min.js"></script>
<![endif]-->
</head>
<body <?php body_class(); ?>>
<!-- IE update message -->
<!--[if lt IE 9]><script type="text/javascript">document.write('<div id="outdated-ie"></div>');</script><![endif]-->

<div id="page">
  
  <header class="site-header" role="banner">
      <div class="container">
        <a class="site-logo-link" href="http://www.utoronto.ca" title="Go to U of T homepage">
        <img class="site-logo" src="<?php echo get_template_directory_uri(); ?>/_inc/img/U-of-T-logo.svg" alt="University logo">
        </a>
        <div class="site-name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></div>
        <!-- Toolbar -->

        <?php do_action( 'before' ); ?>
        <div class="site-tools">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'utility',
                'container'       => false,
                'menu_class' => 'toolbar clearfix'
            )
        ); ?>
        </div>
        <button type="button" aria-label="Search" class="searchdrawer-btn">
          <i class="fa fa-search"></i><span class="btn-label">Search</span>
        </button>

        <div class="systemstatus-btn-container">
          <a href="http://www.systemstatus.utoronto.ca/" class="btn btn-default">System Status</a>
        </div>
      
        <button type="button" class="navdrawer-btn">
          <i class="fa fa-bars"></i><span class="btn-label">Menu</span>
        </button>
      </div><!-- .container -->
  </header>

  <div class="searchdrawer-container">
    <form id="uoftSearchform" class="uoftsearch-form" action="<?php echo get_site_url(); ?>" method="get">
      <label for="uoftsearch" class="sr-only">Search for</label>
      <div class="input-group merged" >
      <div class="input-group-addon"><span class="glyphicon glyphicon-search"></span></div>
      <input type="text" id="keywordInput" name="s" class="form-control search-field" placeholder="Enter topics or keywords..." />
      </div>
      <div class="btn-container">
        <button id="thisSiteBtn">Search this site</button>
      </div>
    </form>
  </div>

  <span class="sr-only"><a href="#content" title="Skip to content">Skip to content</a></span>

  <nav id="site-navigation" class="navbar navbar-default primary-navigation navdrawer-container">
    <div class="container">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'utility',
            'depth'=>2,
                    'container'       => false,
            'menu_class'=>'nav navbar-nav navbar-right visible-xs-block',
            'walker'=> new wp_bootstrap_navwalker()
                )
            ); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'nav-menu', 'walker'=> new wp_bootstrap_navwalker()
 ) ); ?>
    </div><!-- .container -->
  </nav><!-- #site-navigation -->

  <?php if( !is_home() && !is_front_page() ) : ?>
  <section id="content_area" class="container">
    <?php yoast_breadcrumb('<nav class="row" id="bread"><p id="breadcrumbs" class="col-sm-12 breadcrumb">','</p></nav>'); ?>
  <?php endif; ?>