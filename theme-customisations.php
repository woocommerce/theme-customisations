<?php
/**
 * Plugin Name: Theme Customisations
 * Description: A very simple plugin to house theme (or plugin) customisations.
 * Version: 	1.0.0
 * Author: 		WooThemes
 * Author URI: 	http://www.woothemes.com/
 *
 * @package Theme_Customisations
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**
 * Main Theme_Customisations Class
 *
 * @class Theme_Customisations
 * @version	1.0.0
 * @since 1.0.0
 * @package	Theme_Customisations
 */
final class Theme_Customisations {

	public function __construct () {
		add_action( 'init', array( $this, 'theme_customisations_setup' ), -1 );
	}

	/**
	 * Setup all the things
	 */
	public function theme_customisations_setup() {
		add_action( 'wp_enqueue_scripts', array( $this, 'theme_customisations_css' ), 999 );
		add_action( 'wp_enqueue_scripts', array( $this, 'theme_customisations_js' ) );

		require_once( 'custom/functions.php' );
	}

	/**
	 * Enqueue the CSS
	 * @return void
	 */
	public function theme_customisations_css() {
		wp_enqueue_style( 'custom-css', plugins_url( '/custom/style.css', __FILE__ ) );
	}

	/**
	 * Enqueue the Javascript
	 * @return void
	 */
	public function theme_customisations_js() {
		wp_enqueue_script( 'custom-js', plugins_url( '/custom/custom.js', __FILE__ ), array( 'jquery' ) );
	}

} // End Class

/**
 * The 'main' function
 * @return void
 */
function __theme_customisations_main() {
	new Theme_Customisations();
}

/**
 * Initialise the plugin
 */
add_action( 'plugins_loaded', '__theme_customisations_main' );