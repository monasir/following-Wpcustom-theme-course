<?php
    function load_scripts() {
        wp_enqueue_style('template', get_template_directory_uri() . '/css/template.css', array(), '1.0', 'all');
        wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array('jquery'), '4.4.1', true);
        wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
    }

    add_action('wp_enqueue_scripts', 'load_scripts');

    



    /**
 * Register Custom Navigation Walker
 */

function learnwp_config() {
    register_nav_menus(
        array (
            'my_main_menu' => 'Main Menu',
            'my_footer_menu' => 'Footer Menu'
        )
    );

    function register_navwalker(){
        require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
    }
    $args = array(
        'height' => 225,
        'width' => 1920,
    );
    add_theme_support('custom-header', $args);
    add_theme_support( 'post-thumbnails' );
    
}
add_action( 'after_setup_theme', 'learnwp_config', 0 );