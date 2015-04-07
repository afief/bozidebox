<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <title>Afief Yona Ramadhana</title>

  <meta name="description" content="Afief Yona Ramadhana - Personal Blog">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <?php wp_head(); ?>

  <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="<?=get_template_directory_uri() . '/style.css'?>">

  <script src="<?=get_template_directory_uri(); ?>/js/js.js" type="text/javascript" charset="utf-8" async defer></script>
</head>

<body <?php body_class(); ?>>
  <nav class="main-nav">
    <div class="wrapper">
      <a href="<?= home_url(); ?>">
      <div class="foto" id="foto">
        <i class="fa fa-home"></i>
      </div>
      </a>
     <?php wp_nav_menu(array('theme_location'	=> 'primary',
       'sort_column'		=> 'menu_order',
       'container'			=> '',
       'menu_class'		=> 'nav navbar-nav',
       'walker'			=> new Cwd_wp_bootstrapwp_Walker_Nav_Menu())); ?>

    </div>
  </nav>

  <div class="mainpage" id="mainpage">    
