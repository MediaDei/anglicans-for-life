<?php
//allow Featured Images in Posts/Pages
add_theme_support( 'post-thumbnails' );

//Disable Emoji from WP Core
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


// default Media Dei scripts
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



function media_dei_filter_ptags_on_images($content)
{
    // strip <p> from post images
    // regular expression: <p> (whitespace) <a (stuff)>(stuff)</a> (whitespace) </p>
    // replace with <div> and inner contents
    return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '<div class="img">\1\2\3</div>', $content);
}
// we want it to be run after the autop stuff... 10 is default.
add_filter('the_content', 'media_dei_filter_ptags_on_images');


/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function media_dei_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'media_dei_custom_excerpt_length', 999 );

//Change excerpt text from "[...]"" to "Read more"
function media_dei_new_excerpt_more( $more ) {
    return ' <a class="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __('Read more', 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'media_dei_new_excerpt_more' );