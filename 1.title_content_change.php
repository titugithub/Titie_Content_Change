<?php  


/*
 * Plugin Name: Test Plugin
 * Plugin URI: https://example.com/test-plugin
 * Description: This is a simple test plugin for demonstrating WordPress plugin structure.
 * Version: 1.0.0
 * Author: Your Name
 * Author URI: https://example.com
 * License: GPL2
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: test-plugin
 */




 function change_title($hello){

    $hello = 'HI titu';

    return $hello;

 }

add_filter('the_title','change_title');










