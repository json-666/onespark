<?php
//ACF Start
    //ACF register options page start

     if( function_exists('acf_add_options_page') ){
        acf_add_options_page(array(
            'page_title' 	=> 'Globalne ustawienia witryny',
            'menu_title'	=> 'Witryna',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));
     }

//WP Fixes Start
    //Register Menu Start

     function registerMainMenu() {
        register_nav_menu('headerMenu',__( 'Maenu Główne' ));
      }
      add_action( 'init', 'registerMainMenu' );

//Register styles
    wp_enqueue_style( "admin_styles", get_template_directory_uri()."/css/admin.min.css");

//MAKE API
function my_awesome_func( $data ) {
    return wp_head();
}
add_action( 'rest_api_init', function () {
    register_rest_route( 'essentials', '/wphead', array(
      'methods' => 'POST',
      'callback' => 'my_awesome_func',
    ) );
    register_rest_route( 'essentials', '/wpfoot', array(
        'methods' => 'POST',
        'callback' => 'my_awesome_func',
      ) );
  } );
?>