<!DOCTYPE html>
<html>
  <head>
    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf8" />

    <link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Mrs+Sheppards' rel='stylesheet' type='text/css'>
    <link href="<?php echo THEMEPATH; ?>/css/main.css" rel="stylesheet" media="screen">
    <link href="<?php bloginfo( 'stylesheet_url' );?>" type="text/css" rel="stylesheet" media="screen, projection" />
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="<?php bloginfo( 'template_directory' ); ?>/js/bootstrap.min.js"></script>


    <?php wp_head(); ?>


  </head>

  <body <?php body_class(); ?>>

    <header class="main-header">
      <div class="container">
        <div class="logo-container">
          <h2 class="logo"><a  href="<?php echo home_url(); ?>">JavierMota.com</a></h2>
        </div>

        <button class="navbar-toggle visible-xs" type="button" data-toggle="collapse" data-target="#top-menu">
            <i class="fa fa-bars fa-2x"></i>
        </button>

        <?php wp_nav_menu( array( 'menu' => 'Main', 'menu_class' => '', 'container'=> 'nav', 'container_class'=> 'top-menu collapse' ) ); ?>
      </div>
    </header>

    <div id="main-container" class="container">
