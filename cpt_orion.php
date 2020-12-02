<?php

/**
*
* Plugin Name: Orion CPT Course
* Description: CPT to display course on single post page.
* Plugin URI: 
* Plugin Author: SATYAM SAGAR
* Author URI: 
* Version: 1.0
*
*/

if (! defined('ABSPATH')) {
  die;
}

/* Reduired file for Custom Post Type */ 
require_once(plugin_dir_path(__FILE__).'/inc/cpt.php');

/* Reduired file for Metabox to Provide Additional Fields in CPT */
require_once(plugin_dir_path(__FILE__).'/inc/cpt_metabox.php');

/* Function to Add Custom Single Post Template */
add_filter('single_template', 'my_custom_template');
function my_custom_template($single) {
    global $post;
    if ( $post->post_type == 'course_post_type' ) {
        if ( file_exists( plugin_dir_path( __FILE__ ) . '/template/single-course_post_type.php' ) ) {
            return plugin_dir_path( __FILE__ ) . '/template/single-course_post_type.php';
        }        
    }
    return $single;
}