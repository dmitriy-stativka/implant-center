<?php
add_image_size('full_hd', 1920, 1080);

add_action( 'wp_enqueue_scripts', function(){
    if (is_admin()) return; // don't dequeue on the backend
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery',  get_stylesheet_directory_uri() . '/src/js/vendor/jquery-3.2.1.min.js', array(), null, false );

    wp_register_script( 'gsap1', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js', array(), null, false );
    wp_register_script( 'gsap2', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollToPlugin.min.js', array(), null, false );
    wp_register_script( 'gsap3', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js', array(), null, false );
    wp_register_script( 'swiper', get_template_directory_uri() . '/src/js/vendor/swiper.min.js', array(), null, false );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'gsap1');
    wp_enqueue_script( 'gsap2');
    wp_enqueue_script( 'gsap3');
    wp_enqueue_script( 'swiper');

});

function global_scripts() {

  wp_enqueue_style('main-style', get_stylesheet_directory_uri() . '/build/style.css', array());
  wp_enqueue_script('bundle', get_template_directory_uri() . '/build/bundle.js', array('jquery'));

  wp_localize_script('bundle', 'ajaxurl', array(
    'url' => admin_url('admin-ajax.php')
  ));
}

add_action('wp_enqueue_scripts', 'global_scripts');
add_theme_support( 'custom-logo', array() );

function remove_head_scripts()
{
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    remove_action('wp_head', 'wp_print_styles', 99);
    remove_action('wp_head', 'wp_enqueue_style', 99);

    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
    add_action('wp_head', 'wp_print_styles', 30);
    add_action('wp_head', 'wp_enqueue_style', 30);
}

add_action('wp_enqueue_scripts', 'remove_head_scripts');


show_admin_bar(false);


add_theme_support('menus');

// SVG support
function cc_mime_types($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


// ACF Options page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}


function remove_menus(){
    remove_menu_page( 'edit.php' ); //Posts
    remove_menu_page( 'edit-comments.php' ); //Comments

}
add_action( 'admin_menu', 'remove_menus' );


add_action( 'after_setup_theme', 'wpse_theme_setup' );
function wpse_theme_setup() {
    add_theme_support( 'title-tag' );
}


add_filter( 'gform_submit_button', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button gform_button btnBudget' id='gform_submit_button_{$form['id']}'><span>Request an Invite</span></button>";
}

require_once( __DIR__ . '/core/core.php');