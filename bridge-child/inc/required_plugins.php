<?php

require_once get_stylesheet_directory() . '/inc/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'bridge_register_required_plugins' );


function bridge_register_required_plugins() {
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	$plugins = array(
        array(
			'name'         	=> 'Uber Mega Menu', 
			'slug'         	=> 'ubermenu', 
			'source'       	=> get_stylesheet_directory() . '/inc/plugins/ubermenu.zip',
			'required'     	=> true,
		),
		
		array(
			'name'      	=> 'Conditional Fields for Contact Form 7',
			'slug'      	=> 'cf7-conditional-fields',
			'required'  	=> true,
		),
		array(
			'name'      	=> 'Contact Form 7',
			'slug'      	=> 'contact-form-7',
			'required'  	=> true,
		),
	
	);

	/*
	 * Array of configuration settings. Amend each line as needed.
	 *
	 */
	$config = array(
		'id'           => 'bridgechild',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}