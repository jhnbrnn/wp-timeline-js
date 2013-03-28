<?php
/*
*	Plugin Name: TimelineJS Integration
*	Plugin URI: 
*	Description: Embeds TimelineJS library.
*	Version: 0.2
*	Author: John Brennan
*	Author URI: http://jhnbrnn.com
*/

class Timeline {

	/**
	 * init function
	 */
	public function init() {
		add_action('wp_enqueue_scripts', array(__CLASS__, 'register_scripts'));
	}

	/**
	 * Function to register/enqueue scripts
	 *
	 */
	public function register_scripts() {
		wp_register_script( 'timelinejs_lib', plugins_url( '/scripts/timeline/js/storyjs-embed.js', __FILE__ ) );
		wp_enqueue_script( 'timelinejs_lib' );
	}

}

Timeline::init();