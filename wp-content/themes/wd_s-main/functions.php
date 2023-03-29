<?php
/**
 * _s functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wd_s
 */

namespace WebDevStudios\wd_s;

/**
 * Get all the include files for the theme.
 *
 * @author WebDevStudios
 */
function include_inc_files() {
	$files = [
		'inc/customizer/customizer.php', // Customizer additions.
		'inc/functions/', // Custom functions that act independently of the theme templates.
		'inc/hooks/', // Load custom filters and hooks.
		'inc/post-types/', // Load custom post types.
		'inc/scaffolding/', // Scaffolding.
		'inc/setup/', // Theme setup.
		'inc/shortcodes/', // Load shortcodes.
		'inc/template-tags/', // Custom template tags for this theme.
	];

	foreach ( $files as $include ) {
		$include = trailingslashit( get_template_directory() ) . $include;

		// Allows inclusion of individual files or all .php files in a directory.
		if ( is_dir( $include ) ) {
			foreach ( glob( $include . '*.php' ) as $file ) {
				require $file;
			}
		} else {
			require $include;
		}
	}
}

include_inc_files();
add_action('acf/init',  __NAMESPACE__.'\acf_common_block_init');
function acf_common_block_init()
{
	if (function_exists('acf_register_block')) {
		acf_register_block([
			'name'            => 'wds',
			'title'           => __('WDS Block'),
			'description'     => __('WDS Block', 'gutenberg-wds-block-acf'),
			'render_template'	=> 'blocks\wds\wds.php',
			'category'        => 'formatting',
			'icon'            => 'admin-comments',
			'keywords'        => array('wds'),
		]);
	}
}

