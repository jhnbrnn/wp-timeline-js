<?php
/*
*	Plugin Name: TimelineJS Integration
*	Plugin URI: 
*	Description: Embeds TimelineJS library.
*	Version: 0.3
*	Author: John Brennan
*	Author URI: http://jhnbrnn.com
*/

class Timeline {

	/**
	 * init function
	 */
	public function __construct() {
		add_shortcode('timelinejs', array(__CLASS__, 'timeline_shortcode'));
		wp_register_script( 'timelinejs_lib', plugins_url( '/scripts/timeline/js/storyjs-embed.js', __FILE__ ) );
	}

	/**
	 * timeline shortcode handler
	 * @param  mixed $atts
	 * @param  mixed $content
	 */
	public function timeline_shortcode($atts, $content = NULL) {
		wp_enqueue_script( 'timelinejs_lib' );
	}
}

new Timeline();