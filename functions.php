<?php
function files() {
    wp_enqueue_style('main', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'files');

function features() {
    register_nav_menu( "headerMenu", "Menyn i huvvet");
    register_nav_menu( "footerMenu", "Menyn i foten");
}

add_action("after_setup_theme", "features");

remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

add_action('woocommerce_before_main_content', 'my_theme_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'my_theme_wrapper_end', 10);

function my_theme_wrapper_start() {
    echo '<section id="main">';
}

function my_theme_wrapper_end() {
    echo '</section>';
}
?>