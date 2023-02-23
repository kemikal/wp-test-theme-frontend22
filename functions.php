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

?>