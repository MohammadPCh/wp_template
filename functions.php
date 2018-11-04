<?php
add_theme_support( 'post-thumbnails' );

// 
function myprefix_enqueue_scripts() {
    wp_enqueue_script( 'my-script', get_template_directory_uri() . '/js/my-script.js', array(), true );
}
add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );

?>