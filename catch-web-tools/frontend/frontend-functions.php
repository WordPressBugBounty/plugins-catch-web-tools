<?php

// Exit if accessed directly

if (! defined('ABSPATH')) exit;

/**
 * @package Frontend
 */


/**
 * Enqueue genericons
 */
function catchwebtools_enqueue_genericons()
{
	$social_settings = catchwebtools_get_options('catchwebtools_social');
	// wp_enqueue_style('cwt-maintainace', CATCHWEBTOOLS_URL . 'css/maintainance-message.css', array(), '6.7.2', 'all');

	if ($social_settings['status']) {
		// Font Awesome
		wp_enqueue_style('cwt-font-awesome', CATCHWEBTOOLS_URL . 'css/font-awesome/css/all.min.css', array(), '6.7.2', 'all');



		$social_brand_color = $social_settings['social_icon_brand_color'];

		if ('hover' == $social_brand_color || 'hover-static' == $social_brand_color) {
			wp_enqueue_style('catch-web-tools-social-icons', CATCHWEBTOOLS_URL . 'css/social-icons.css', false, '24022016');
		}
	}
}



add_action('wp_enqueue_scripts', 'catchwebtools_enqueue_genericons');

function catchwebtools_styles_enqueue_styles()
{
	wp_enqueue_style('cwt-styles', CATCHWEBTOOLS_URL . 'css/cwt-styles.css', false, CATCHWEBTOOLS_VERSION);
}
add_action('wp_enqueue_scripts', 'catchwebtools_styles_enqueue_styles');


require_once CATCHWEBTOOLS_PATH . 'frontend/inc/webmasters-tools.php';

require_once CATCHWEBTOOLS_PATH . 'frontend/inc/opengraph-tools.php';

require_once CATCHWEBTOOLS_PATH . 'frontend/inc/seo.php';

require_once CATCHWEBTOOLS_PATH . 'frontend/inc/custom-css.php';

/**
 * Function to get header information to output in wp_head
 * @uses catchwebtools_webmaster_header_display, catchwebtools_opengraph_display, catchwebtools_seo_display, catchwebtools_custom_css_display
 */
function catchwebtools_get_header_information()
{
	$webmaster	= catchwebtools_webmaster_header_display();
	$opengraph	= catchwebtools_opengraph_display();
	$seo		= catchwebtools_seo_display();
	$custom_css	= catchwebtools_custom_css_display();

	if ('' == $webmaster && '' == $opengraph && '' == $seo && '' == $custom_css) {
		//Bail early if all modles are empty
		return;
	}

	$webmaster_allowed_tags = array(
		'meta'   => array(
			'name'    => true,
			'content' => true,
			'property' => true,
			'charset' => true,
		),
		'script' => array(
			'src'   => true,
			'type'  => true,
		),
		'link' => array(
			'href'   => true,
			'type'  => true,
			'rel'  => true,
			'title'  => true,
		),
		'style'  => array(
			'type' => true,
		),
	);

	$opengraph_allowed_tags = array(
		'meta'   => array(
			'name'    => true,
			'content' => true,
			'property' => true,
			'charset' => true,
		),
	);

	$seo_allowed_tags = array(
		'meta'   => array(
			'name'    => true,
			'content' => true,
		),
	);

	$customCss_allowed_tags = array(

		'style'  => array(
			'type' => true,
			'rel'  => true,

		),
	);

	if ('' !== $webmaster || '' !== $opengraph || '' !== $seo || '' !== $custom_css) {
		echo '<!-- This site is optimized with the Catch Web Tools v' . esc_html(CATCHWEBTOOLS_VERSION) . ' - https://catchplugins.com/plugins/catch-web-tools/ -->' . PHP_EOL;
	}
	echo PHP_EOL . $webmaster . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- $webmaster is assembled from escaped values in catchwebtools_webmaster_header_display().

	echo PHP_EOL . $opengraph . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- $opengraph is assembled from escaped values in catchwebtools_opengraph_display().

	echo PHP_EOL . $seo . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- $seo is assembled from escaped values in catchwebtools_seo_display().

	if ('' !== $custom_css) {
		echo '<!-- CWT Custom CSS -->' . PHP_EOL . $custom_css . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- $custom_css is assembled from escaped values in catchwebtools_custom_css_display().
	}
	if ('' !== $webmaster || '' !== $opengraph || '' !== $seo || '' !== $custom_css) {
		echo '<!-- / Catch Web Tools plugin. -->' . PHP_EOL;
	}
}
add_action('wp_head', 'catchwebtools_get_header_information', 99);


/**
 * Function to get footer information to output in wp_footer
 * @uses catchwebtools_webmaster_footer_display
 */

function catchwebtools_get_footer_information()
{
	$webmaster	=	catchwebtools_webmaster_footer_display();

	if ('' == $webmaster) {
		//Bail early if all modles are empty
		return;
	}


	echo '<!-- This site is optimized with the Catch Web Tools v' . esc_html(CATCHWEBTOOLS_VERSION) . ' - https://catchplugins.com/plugins/catch-web-tools/ -->' . PHP_EOL;
	echo $webmaster . PHP_EOL; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- $webmaster is built from escaped values in catchwebtools_webmaster_footer_display().
	if ('' !== $webmaster) {
		echo '<!-- / Catch Web Tools plugin. -->' . PHP_EOL;
	}
}
add_action('wp_footer', 'catchwebtools_get_footer_information', 99);
