<?php

/**
 * Plugin Name:       A3 Custom plugin
 * Plugin URI:        https://github.com/vijayakunwar/a3-simple-customizer-and-widget
 * Description:       Provide customize color and add widget to single post.
 * Version:           0.1
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Vijaya Kunwar
 * Author URI:        https://vijayakunwar.github.io/
 */


// If this file is called directly, abort
if ( ! defined( 'ABSPATH' ) ){
    die();
}

//include plugin dependencies
require_once plugin_dir_path(__FILE__).'custom_color/custom_color.php';

require_once plugin_dir_path(__FILE__).'admin/custom_login.php';

require_once plugin_dir_path(__FILE__).'custom_post_widget/custom_post_widget.php';

require_once plugin_dir_path(__FILE__).'admin/admin-menu.php';
require_once plugin_dir_path(__FILE__).'admin/settings-page.php';
