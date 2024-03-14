<?php
/**
 * Since we need dynamic favicons - we include them in the header here
 * 
 * @return void
 */
add_action('wp_head', function () {
	echo '<link rel="apple-touch-icon" type="image/png" sizes="180x180" href="' . get_stylesheet_directory_uri() . '/assets/images/favicon_' . get_locale() . '_180.png" />';
	echo '<link rel="icon" type="image/png" sizes="32x32" href="' . get_stylesheet_directory_uri() . '/assets/images/favicon_' . get_locale() . '_32.png" />';
	echo '<link rel="icon" type="image/png" sizes="16x16" href="' . get_stylesheet_directory_uri() . '/assets/images/favicon_' . get_locale() . '_16.png" />';
	echo '<link rel="icon" type="image/x-icon" href="' . get_stylesheet_directory_uri() . '/assets/images/favicon.svg">';
}, 100);

function enqueue_scripts() {
	wp_enqueue_style(
		'theme-styles',
		get_stylesheet_directory_uri() . '/style.css',
		[],
		"1.1"
	);

	wp_enqueue_style(
		'material-icons',
		"https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200",
		[],
		"1.1"
	);
}

function admin_scripts() {
	wp_enqueue_style(
		'material-icons',
		"https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200",
		[],
		"1.1"
	);
}

function custom_upload_mimes( $existing_mimes ) {
	$existing_mimes['webp'] = 'image/webp';
    $existing_mimes['ico'] = 'image/x-icon';
    $existing_mimes['svg'] = 'image/svg+xml';
	return $existing_mimes;
}
add_filter( 'mime_types', 'custom_upload_mimes' );
add_action('wp_enqueue_scripts', 'enqueue_scripts');
add_action('admin_enqueue_scripts', 'admin_scripts');
