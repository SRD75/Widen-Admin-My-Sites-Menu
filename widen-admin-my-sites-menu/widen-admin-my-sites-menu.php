<?php

/*
Plugin Name: Widen Admin My Sites Menu
Plugin URI: https://github.com/SRD75/Widen-Admin-My-Sites-Menu/
Description: Widen the Admin Dashboards "My Sites" menu.
Author: Steve Doig
Version: 1.0
Author URI: https://websitetechnology.com.au
*/

function my_admin_theme_style() {
    wp_enqueue_style('my-admin-theme', plugins_url('wp-admin.css', __FILE__));
}
add_action('admin_enqueue_scripts', 'my_admin_theme_style');
add_action('login_enqueue_scripts', 'my_admin_theme_style');

function my_crazy_admin_footer() {
   echo '<p>This theme was made by <a href="https://websitetechnology.com.au">Steve Doig</a>.</p>';
}

add_action('admin_footer', 'my_crazy_admin_footer');

?>