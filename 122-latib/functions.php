
<?php
function maroon_elegant_theme_setup() {
add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
'height' => 100,
'width' => 400,
'flex-height' => true,
'flex-width' => true,
));a
register_nav_menus( array(
'primary' => __( 'Primary Menu', 'maroon-elegant-theme' ),
));
}
add_action( 'after_setup_theme', 'maroon_elegant_theme_setup' );
function maroon_elegant_theme_scripts() {
wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'maroon_elegant_theme_scripts' );
?>