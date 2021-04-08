<?php

/**
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           Plugin_Name
 *
 * @wordpress-plugin
 * Plugin Name:       Oxygen boilerplate
 * Plugin URI:        http://example.com/plugin-name-uri/
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       plugin-name
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}


wp_enqueue_style('oxygen-boilerplate', plugin_dir_url(__FILE__) . 'oxygen-boilerplate.css', array(), '1.0.0', 'all');
// wp_enqueue_script('oxygen-boilerplate', plugin_dir_url(__FILE__) . 'oxygen-boilerplate.js', array('jquery'), '1.0.0', false);


// Add more custom Oxygen functions bellow.

if (!function_exists('current_year')) {
	function current_year()
	{
		echo date('Y');
	}
}
