<?php
require_once('wp-bootstrap-navwalker.php');
add_theme_support( 'menus' );
function register_my_menus() {
	register_nav_menus( array(
    'primary'=> __( 'Primary Menu' ),
    'home'=> __( 'Home Menu' ) 
  
  ));
}
add_action( 'after_setup_theme', 'register_my_menus' );
?>
