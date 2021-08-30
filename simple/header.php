<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo("charset") ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
  <?php wp_head(); ?>
  <title><?php bloginfo("name"); ?></title>
</head>
<body>
  <header>
    <div class="container">
        <h1><?php bloginfo("name"); ?></h1>
        <span><?php bloginfo("description"); ?></span>
    </div>
  </header>
  <nav class="main-nav">
    <div class="container">
      <?php 
      $arge = array(
        "theme_location" => "primary"
      );
       ?>
       <?php wp_nav_menu($args); ?>
    </div>
  </nav>