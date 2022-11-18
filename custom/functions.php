<?php
/**
 * Functions.php
 *
 * @package  Theme_Customisations
 * @author   WooThemes
 * @since    1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * functions.php
 * Add PHP snippets here
 */
 function allow_modern_images( $mime_types ) {
 $mime_types['heic'] = 'image/heic';
 $mime_types['heif'] = 'image/heif';
 $mime_types['heics'] = 'image/heic-sequence';
 $mime_types['heifs'] = 'image/heif-sequence';
 $mime_types['avif'] = 'image/avif';
 $mime_types['avifs'] = 'image/avif-sequence';
 return $mime_types;
}
add_filter( 'upload_mimes', 'allow_modern_images');
