<?
add_theme_support( 'menus' )
function register_my_menu() {
	register_nav_menus( array( 
		'primary', __( 'Primary' ),
	) );
}
add_action( 'after_setup_theme', 'register_my_menu' );
?>