<?php

/**
 * Plugin Name: yhy
 * Plugin URI:  https://wordpress.org
 * Description: Enables the WordPress classic editor and the old-style Edit Post screen with TinyMCE, Meta Boxes, etc. Supports the older plugins that extend this screen.
 * Version:     1.6.2
 * Author:      yahya
 */


function register_new_widg($widgets_manager)
{
	require_once(__DIR__ . '/widgets/widget-2.php');

	$widgets_manager->register(new \Elementor_Test_Wid());
}
add_action('elementor/widgets/register', 'register_new_widg');
