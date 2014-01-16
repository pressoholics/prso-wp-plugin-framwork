<?php

/**
	!!!HOW TO SETUP!!!
	
	* Have you made sure that the constants have unique names?
	* Have you replaced all instanced of these constants in this file and plugin class file
	* Have you given the plugin class a unique class name suitable for this project?
	* Have you updated the class name used to instatiate the plugin in this file?
	
	Delete this once you have done this basic setup, the framework is ready for your project
	
**/

/*
 * Plugin Name: prso-plugin-framework
 * Plugin URI: 
 * Description: 
 * Author: Benjamin Moody
 * Version: 1.0
 * Author URI: http://www.benjaminmoody.com
 * License: GPL2+
 * Text Domain: prso_plugin_framework
 * Domain Path: /languages/
 */

//Define plugin constants
define( 'PRSOPLUGINFRAMEWORK__MINIMUM_WP_VERSION', '3.0' );
define( 'PRSOPLUGINFRAMEWORK__VERSION', '1.0' );
define( 'PRSOPLUGINFRAMEWORK__DOMAIN', 'prso-plugin-framework-plugin' );

//Plugin admin options will be available in global var with this name, also is database slug for options
define( 'PRSOPLUGINFRAMEWORK__OPTIONS_NAME', 'prso-plugin-framework-options' ); 

define( 'PRSOPLUGINFRAMEWORK__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PRSOPLUGINFRAMEWORK__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

//Include plugin classes
require_once( PRSOPLUGINFRAMEWORK__PLUGIN_DIR . 'class.prso-plugin-framework.php'               );

//Set Activation/Deactivation hooks
register_activation_hook( __FILE__, array( 'PrsoPluginFramework', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( 'PrsoPluginFramework', 'plugin_deactivation' ) );

//Set plugin config
$config_options = array();

//Instatiate plugin class and pass config options array
new PrsoPluginFramework( $config_options );