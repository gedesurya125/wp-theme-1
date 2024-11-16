<?php

function gs_load_script(){
  //load the css normalizer file
  // load the font style
  wp_enqueue_style( 
    'gs_google_font_poppies', 
    get_template_directory_uri().'/assets/css/normalize.css', 
    array()
  );
  // load the main style
  wp_enqueue_style(
    'gs-style', 
    get_stylesheet_uri(),  
    array(), 
    filemtime(get_template_directory(  ).'/style.css'), //? enable only in the development mode. otherwise use the css version number instead
    'all'
  );

  // load the font style
  wp_enqueue_style( 
    'gs_google_font_poppies', 
    get_template_directory_uri().'/assets/fonts/Poppins/font.css', 
    array()
  );
  
};

add_action( 'wp_enqueue_scripts', 'gs_load_script' );

//? This remove the default important margin source: https://stackoverflow.com/questions/25491619/how-to-delete-margin-top-32px-important-from-twenty-twelve
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );