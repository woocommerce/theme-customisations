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
		add_filter( 'template_include', array( $this, 'theme_customisations_template' ), 11 );

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

	/**
	 * Look in this plugin for template files first.
	 * This works for the top level templates (IE single.php, page.php etc). However, it doesn't work for
	 * template parts yet (content.php, header.php etc).
	 *
	 * Relevant trac tricket; https://core.trac.wordpress.org/ticket/13239
	 *
	 * @param  string $template template string.
	 * @return string $template new template string.
	 */
	public function theme_customisations_template( $template ) {
		if ( file_exists( untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/custom/templates/' . basename( $template ) ) ) {
			$template = untrailingslashit( plugin_dir_path( __FILE__ ) ) . '/custom/templates/' . basename( $template );
		}

		return $template;
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