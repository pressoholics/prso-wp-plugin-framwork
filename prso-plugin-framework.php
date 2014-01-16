<?php

/**
	!!!HOW TO SETUP!!!
	
	Use some find and replace to quickly set some unique names for your plugin.
	
	1. Create unique constant prefix: 
	
			[*PRSOPLUGINFRAMEWORKCONTSTANT*] --> MYUNIQUECONSTANT
			
	2. Add name of your unique plugin class file: 
	
			[*PRSOPLUGINFRAMEWORK_CLASS_INC_FILE*] --> my-unique-filename
			
	3. Create uniqueue name for plugin class: 
	
			[*PRSOPLUGINFRAMEWORK_CLASS*] --> MyUniqueClassName
			
	4. Create unique slug for plugin: 
	
			[*PRSOPLUGINFRAMEWORK_SLUG*] --> my_unique_slug_name
			
	5. If using option framework create uniqueu class name for options class: 
	
			[*PRSOPLUGINFRAMEWORK_OPTIONS_CLASS*] --> MyUniqueOptionsClass
			
	6. If not using options framework then comment out $this->load_redux_options_framework(); line 
		and delete ReduxFramework folder from inc folder.
	
	Also you will need to delete git hidden folder in root of your copy.
	
	Delete this once you have done this basic setup, the framework is ready for your project
	
**/

/*
 * Plugin Name: [*PRSOPLUGINFRAMEWORKNAME*]
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
define( '[*PRSOPLUGINFRAMEWORKCONTSTANT*]__MINIMUM_WP_VERSION', '3.0' );
define( '[*PRSOPLUGINFRAMEWORKCONTSTANT*]__VERSION', '1.0' );
define( '[*PRSOPLUGINFRAMEWORKCONTSTANT*]__DOMAIN', '[*PRSOPLUGINFRAMEWORK_SLUG*]-plugin' );

//Plugin admin options will be available in global var with this name, also is database slug for options
define( '[*PRSOPLUGINFRAMEWORKCONTSTANT*]__OPTIONS_NAME', '[*PRSOPLUGINFRAMEWORK_SLUG*]-options' );

define( '[*PRSOPLUGINFRAMEWORKCONTSTANT*]__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( '[*PRSOPLUGINFRAMEWORKCONTSTANT*]__PLUGIN_URL', plugin_dir_url( __FILE__ ) );

//Include plugin classes
require_once( [*PRSOPLUGINFRAMEWORKCONTSTANT*]__PLUGIN_DIR . 'class.[*PRSOPLUGINFRAMEWORK_CLASS_INC_FILE*].php'               );

//Set Activation/Deactivation hooks
register_activation_hook( __FILE__, array( '[*PRSOPLUGINFRAMEWORK_CLASS*]', 'plugin_activation' ) );
register_deactivation_hook( __FILE__, array( '[*PRSOPLUGINFRAMEWORK_CLASS*]', 'plugin_deactivation' ) );

//Set plugin config
$config_options = array();

//Instatiate plugin class and pass config options array
new [*PRSOPLUGINFRAMEWORK_CLASS*]( $config_options );