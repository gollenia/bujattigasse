<?php
/**
 * Since we need dynamic favicons - we include them in the header here
 * 
 * @return void
 */
add_action('wp_head', function () {
	echo '<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="' . get_stylesheet_directory_uri() . '/favicons/favicon_' . get_locale() . '_180.png" />';
	echo '<link rel="icon" type="image/png" sizes="32x32" href="' . get_stylesheet_directory_uri() . '/favicons/favicon_' . get_locale() . '_32.png" />';
	echo '<link rel="icon" type="image/png" sizes="16x16" href="' . get_stylesheet_directory_uri() . '/favicons/favicon_' . get_locale() . '_16.png" />';
}, 100);
