<?php

function gs_load_script(){
  // load the font style
  wp_enqueue_style( 
    'gs_google_font_poppies', 
    get_template_directory_uri().'/assets/fonts/Poppins/font.css', 
    array()
  );
  // load the font classes
  wp_enqueue_style( 
    'gs_font_classes', 
    get_template_directory_uri().'/assets/css/font_classes.css', 
    array()
  );


  // load the responsiveness behavior
  wp_enqueue_style( 
    'gs_css_responsiveness', 
    get_template_directory_uri().'/assets/css/responsiveness.css', 
    array()
  );

  // load the css normalizer
  wp_enqueue_style( 
    'gs_css_normalizer', 
    get_template_directory_uri().'/assets/css/normalize.css', 
    array()
  );
  // load the main style
  wp_enqueue_style(
    'gs-main-style', 
    get_stylesheet_uri(),  
    array(), 
    filemtime(get_template_directory(  ).'/style.css'), //? enable only in the development mode. otherwise use the css version number instead
    'all'
  );


  // Load the javascript files
  wp_enqueue_script( "gs_js_index", get_template_directory_uri(  ).'/assets/js/index.js', array(), '1.0', true ); //? true mean the script is loaded in the footer



  
};

add_action( 'wp_enqueue_scripts', 'gs_load_script' );

//? Register the menu plugin in wordpress Appearance > Menus
register_nav_menus( array(
  'wp_devs_main_menu' => 'Main Menu',
  'wp_devs_footer_menu' => 'Footer Menu'
  )
);


//? This remove the default important margin source: https://stackoverflow.com/questions/25491619/how-to-delete-margin-top-32px-important-from-twenty-twelve
add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );