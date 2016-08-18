<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/normalize.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/responsive.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/sidebar_snippet.css" type="text/css">
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/vendor/jquery/jquery.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
    <title>Gestión de Proyectos</title>
    <?php wp_head(); ?>
  </head>
  <body class="container">
    <header>
      <div class="jumbotron">
        <h1>Gestión de Proyectos</h1>
        <p>Aplicación para gestionar proyectos</p>
        <!--<p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>-->
      </div>

      <nav>
        <?php wp_nav_menu(
          array(
            'container'=>false,
            'items_wrap'=>'<ul id="menu-top" class="nav nav-tabs">%3$s</ul>',
            'theme_location'=>'menu'
          )
        ) ?>
      </nav>
    </header>
