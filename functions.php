<?php
//allow Featured Images in Posts/Pages
add_theme_support( 'post-thumbnails' );

//Disable Emoji from WP Core
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

function scripts_styles() {

    //Deregister Scripts/Styles from WP Core
    wp_deregister_style( 'open-sans' );
    wp_register_style( 'open-sans', false );

    //Register Scripts/Styles
    wp_register_style( 'global-style', get_template_directory_uri() . '/css/global.css');
    wp_register_style('font-awesome-style', get_template_directory_uri() . '/css/font-awesome.min.css');

    //Enqueue Scripts/Styles
    wp_enqueue_script('jquery'); // default jQuery

    wp_enqueue_style('global-style');
    wp_enqueue_style('font-awesome-style');


}
add_action( 'wp_enqueue_scripts', 'scripts_styles');
?>
