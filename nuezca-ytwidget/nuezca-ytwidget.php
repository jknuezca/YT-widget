<?php
/**
 * @package Youtube Widget
 */
/*
Plugin Name: Youtube Widget
Plugin URI: http://nuezca.example.com
Description: Displays Youtube count and sub button
Version: 1.0.0
Author: Kenneth Nuezca
Author URI: http://nuezca.example.com
License: GPLv2 or later
*/

//Exit if accessed directly
if(!defined ('ABSPATH')){
   exit;  
}    

//Load Scripts
require_once (plugin_dir_path(__FILE__).'/includes/youtubewidget-scripts.php');

//Load Class
require_once (plugin_dir_path(__FILE__).'/includes/youtubewidget-class.php');

//Register Widget
function register_youtubewidget(){
   register_widget('Youtube_Widget');
}

//Hook in function
add_action('widgets_init', 'register_youtubewidget');