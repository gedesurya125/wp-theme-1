<?php 
//? Function reference https://developer.wordpress.org/reference/functions/ 
  function my_register_main_style(){
    wp_enqueue_style ('any-name',get_template_directory_uri().'/style.css');}
  add_action( 'wp_head', 'add_stylesheet_to_head' );
?>