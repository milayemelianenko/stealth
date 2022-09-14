<?php
add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebars') )
register_sidebar(array('name'=>'Sidebar',
  	'id' => 'sidebar-1',
	'before_widget' => '<div id="%1$s" class="widgetbox clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="widget_title">',
	'after_title' => '</h4>'
));

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function my_widget_content_wrap($content) {
    $content = '<div class="widget_body">'.$content.'</div>';
    return $content;
}

add_filter('widget_text', 'my_widget_content_wrap');

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'  => 'Theme Options',
        'menu_title'  => 'Theme Options',
        'menu_slug'   => 'theme-options',
        'capability'  => 'edit_posts',
        'redirect'    => false
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Theme Header',
        'menu_title'  => 'Header',
        'parent_slug' => 'theme-options',
    ));
    acf_add_options_sub_page(array(
        'page_title'  => 'Theme Footer',
        'menu_title'  => 'Footer',
        'parent_slug' => 'theme-options',
    ));
}

function meks_disable_srcset( $sources ) {
    return false;
}
 
add_filter( 'wp_calculate_image_srcset', 'meks_disable_srcset' );

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function stripQuotes($text) {
	$unquoted = preg_replace('/^(\'(.*)\'|"(.*)")$/', '$2$3', $text);
	return $unquoted;
} 

function remove_head_scripts() { 
    remove_action('wp_head', 'wp_print_scripts'); 
    remove_action('wp_head', 'wp_print_head_scripts', 9); 
    remove_action('wp_head', 'wp_enqueue_scripts', 1);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

function my_deregister_scripts(){
    wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

//remove migrate jquery
function isa_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );

function smartwp_remove_wp_block_library_css(){
    wp_dequeue_style( 'wp-block-library' );
    wp_dequeue_style( 'wp-block-library-theme' );
    wp_dequeue_style( 'wc-block-style' ); // Remove WooCommerce block CSS
}
add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );

function slugify($string){
    return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $string), '-'));
}

function add_bcn_manage_options_to_admin() {
    $role = get_role( 'administrator' );
 
    $role->add_cap( 'bcn_manage_options' ); 
}
add_action( 'admin_init', 'add_bcn_manage_options_to_admin');

define('THEME_DIR_URL', get_stylesheet_directory_uri());
define('HOME_URL', home_url());

if ( ! function_exists( 'stealth_register_nav_menu' ) ) {
 
    function stealth_register_nav_menu(){
        register_nav_menus( array(
            'primary_menu'      => __( 'Primary Menu', 'stealth' ),
            'footer_menu'       => __( 'Footer Menu', 'stealth' )
        ) );
    }
    add_action( 'after_setup_theme', 'stealth_register_nav_menu', 0 );
}

global $option_fields;
$option_fields = get_fields('option');


?>