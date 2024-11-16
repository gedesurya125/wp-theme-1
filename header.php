<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(  ) ?>
</head>

<body <?php body_class('poppins-light') ?> >
  <nav>
    <?php wp_nav_menu( array(
      "location"=> 'wp_devs_main_menu'
      ) 
    )?>
  </nav>