<?php
if ( function_exists('register_sidebar') )
    register_sidebar();

add_filter( 'wp_title', 'baw_hack_wp_title_for_home' );
function baw_hack_wp_title_for_home( $title )
{
  if( empty( $title ) && ( is_home() || is_front_page() ) ) {
    return __( 'HOME') . ' | ';
  }
  return $title;
}
function wp_fittext_script() {
    wp_deregister_script( 'fittext' );
    wp_register_script( 'fittext', get_template_directory_uri().'/js/jquery.fittext.js');
    wp_enqueue_script( 'fittext' );
} 
function wp_media_style() {
	wp_deregister_style( 'media' );
	wp_register_style('media', get_template_directory_uri().'/media.css');
    wp_enqueue_style('media');
}
if ( !is_nav_menu('top-menu') ) {
    $menu_id = wp_create_nav_menu('menu');
    wp_update_nav_menu_item($menu_id, 1);
}
if ( !is_nav_menu('bottom-menu') ) {
    $menu_id = wp_create_nav_menu('bottom');
    wp_update_nav_menu_item($menu_id, 2);
}
function register_my_menus() {
  register_nav_menus(
    array(
      'top-menu' => __( 'Header Menu' ),
      'bottom-menu' => __( 'Extra Menu' )
    )
  );
}

add_action( 'init', 'register_my_menus' );
add_action( 'wp_enqueue_scripts', 'wp_fittext_script' );
add_action( 'wp_enqueue_scripts', 'wp_media_style' );

?>
