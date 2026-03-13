<?php

// Exit if accessed directly
if (! defined('ABSPATH')) exit;

/**
 * @package Admin
 * Default Options for CWT
 */

/**
 * Returns list of social icons currently supported
 *
 * @since Catch Web Tools 1.5
 */
function catchwebtools_get_social_icons_list()
{
	$options =	array(
		'facebook'		=> array(
			'fa_class' 	=> 'facebook',
			'label' 			=> esc_html__('Facebook', 'catch-web-tools')
		),
		'twitter'		=> array(
			'fa_class' 	=> 'twitter',
			'label' 			=> esc_html__('Twitter', 'catch-web-tools')
		),
		'x-twitter'		=> array(
			'fa_class' 	=> 'x-twitter',
			'label' 			=> esc_html__('X Twitter', 'catch-web-tools')
		),
		'instagram'	=> array(
			'fa_class' 	=> 'instagram',
			'label' 			=> esc_html__('Instagram', 'catch-web-tools')
		),
		'google-plus'	=> array(
			'fa_class' 	=> 'google-plus',
			'label' 			=> esc_html__('Googleplus', 'catch-web-tools')
		),
		'email'		=> array(
			'fa_class' 	=> 'envelope',
			'label' 			=> esc_html__('Email', 'catch-web-tools')
		),
		'feed'			=> array(
			'fa_class' 	=> 'feed',
			'label' 			=> esc_html__('Feed', 'catch-web-tools')
		),
		'dribbble'		=> array(
			'fa_class' 	=> 'dribbble',
			'label' 			=> esc_html__('Dribbble', 'catch-web-tools')
		),
		'pinterest'	=> array(
			'fa_class' 	=> 'pinterest',
			'label' 			=> esc_html__('Pinterest', 'catch-web-tools')
		),
		'behance'	=> array(
			'fa_class' 	=> 'behance',
			'label' 			=> esc_html__('Behance', 'catch-web-tools')
		),
		'wordpress'	=> array(
			'fa_class' 	=> 'wordpress',
			'label' 			=> esc_html__('WordPress', 'catch-web-tools')
		),
		'github'		=> array(
			'fa_class' 	=> 'github',
			'label' 			=> esc_html__('GitHub', 'catch-web-tools')
		),
		'linkedin'		=> array(
			'fa_class' 	=> 'linkedin',
			'label' 			=> esc_html__('LinkedIn', 'catch-web-tools')
		),

		'flickr'		=> array(
			'fa_class' 	=> 'flickr',
			'label' 			=> esc_html__('Flickr', 'catch-web-tools')
		),
		'vimeo'		=> array(
			'fa_class' 	=> 'vimeo',
			'label' 			=> esc_html__('Vimeo', 'catch-web-tools')
		),
		'youtube'		=> array(
			'fa_class' 	=> 'youtube',
			'label' 			=> esc_html__('YouTube', 'catch-web-tools')
		),
		'tumblr'		=> array(
			'fa_class' 	=> 'tumblr',
			'label' 			=> esc_html__('Tumblr', 'catch-web-tools')
		),
		'codepen'		=> array(
			'fa_class' 	=> 'codepen',
			'label' 			=> esc_html__('CodePen', 'catch-web-tools')
		),
		'skype'		=> array(
			'fa_class' 	=> 'skype',
			'label' 			=> esc_html__('Skype', 'catch-web-tools')
		),
		'digg'			=> array(
			'fa_class' 	=> 'digg',
			'label' 			=> esc_html__('Digg', 'catch-web-tools')
		),
		'reddit'		=> array(
			'fa_class' 	=> 'reddit',
			'label' 			=> esc_html__('Reddit', 'catch-web-tools')
		),
		'stumbleupon'	=> array(
			'fa_class' 	=> 'stumbleupon',
			'label' 			=> esc_html__('Stumbleupon', 'catch-web-tools')
		),
		'dropbox'		=> array(
			'fa_class' 	=> 'dropbox',
			'label' 			=> esc_html__('DropBox', 'catch-web-tools'),
		),
		'telegram'		=> array(
			'fa_class' 	=> 'telegram',
			'label' 			=> esc_html__('Telegram', 'catch-web-tools'),
		),
		'discord'		=> array(
			'fa_class' 	=> 'discord',
			'label' 			=> esc_html__('Discord', 'catch-web-tools'),
		),
		'line'		=> array(
			'fa_class' 	=> 'line',
			'label' 			=> esc_html__('Line', 'catch-web-tools'),
		),
		'spotify'		=> array(
			'fa_class' 	=> 'spotify',
			'label' 			=> esc_html__('Spotify', 'catch-web-tools'),
		),
		'foursquare'	=> array(
			'fa_class' 	=> 'foursquare',
			'label' 			=> esc_html__('Foursquare', 'catch-web-tools'),
		),
		'twitch'		=> array(
			'fa_class' 	=> 'twitch',
			'label' 			=> esc_html__('Twitch', 'catch-web-tools'),
		),
		'vk'		=> array(
			'fa_class' 	=> 'vk',
			'label' 			=> esc_html__('vk', 'catch-web-tools'),
		),
		'get-pocket'		=> array(
			'fa_class' 	=> 'get-pocket',
			'label' 			=> esc_html__('Get Pocket', 'catch-web-tools'),
		),
		'website'		=> array(
			'fa_class' 	=> 'globe',
			'label' 			=> esc_html__('Website', 'catch-web-tools'),
		),
		'phone'		=> array(
			'fa_class' 	=> 'phone',
			'label' 			=> esc_html__('Phone', 'catch-web-tools'),
		),
		'mobile'		=> array(
			'fa_class' 	=> 'mobile',
			'label' 	=> esc_html__('Mobile', 'catch-web-tools'),
		),
		'cart-shopping'			=> array(
			'fa_class' 	=> 'cart-shopping',
			'label' 	=> esc_html__('Cart', 'catch-web-tools'),
		),
		'cloud'		=> array(
			'fa_class' 	=> 'cloud',
			'label' 			=> esc_html__('Cloud', 'catch-web-tools'),
		),
		'link'		=> array(
			'fa_class' 	=> 'link',
			'label' 			=> esc_html__('Link', 'catch-web-tools'),
		),
		'bluesky'		=> array(
			'fa_class' 	=> 'bluesky',
			'label' 			=> esc_html__('Bluesky', 'catch-web-tools'),
		),
		'tiktok'		=> array(
			'fa_class' 	=> 'tiktok',
			'label' 			=> esc_html__('Tiktok', 'catch-web-tools'),
		),
		'xing'		=> array(
			'fa_class' 	=> 'xing',
			'label' 			=> esc_html__('Xing', 'catch-web-tools'),
		),
		'threads'		=> array(
			'fa_class' 	=> 'threads',
			'label' 			=> esc_html__('Threads', 'catch-web-tools'),
		),
		'whatsapp'		=> array(
			'fa_class' 	=> 'whatsapp',
			'label' 			=> esc_html__('WhatsApp', 'catch-web-tools'),
		)
		// 'facebook'		=> esc_html__('Facebook', 'catch-web-tools'),
		// 'twitter'		=> esc_html__('Twitter', 'catch-web-tools'),
		// 'googleplus'	=> esc_html__('Googleplus', 'catch-web-tools'),
		// 'mail'			=> esc_html__('Email', 'catch-web-tools'),
		// 'feed'			=> esc_html__('Feed', 'catch-web-tools'),
		// 'wordpress'		=> esc_html__('WordPress', 'catch-web-tools'),
		// 'github'		=> esc_html__('GitHub', 'catch-web-tools'),
		// 'linkedin'		=> esc_html__('LinkedIn', 'catch-web-tools'),
		// 'pinterest'		=> esc_html__('Pinterest', 'catch-web-tools'),
		// 'flickr'		=> esc_html__('Flickr', 'catch-web-tools'),
		// 'vimeo'			=> esc_html__('Vimeo', 'catch-web-tools'),
		// 'youtube'		=> esc_html__('YouTube', 'catch-web-tools'),
		// 'tumblr'		=> esc_html__('Tumblr', 'catch-web-tools'),
		// 'instagram'		=> esc_html__('Instagram', 'catch-web-tools'),
		// 'polldaddy'		=> esc_html__('PollDaddy', 'catch-web-tools'),
		// 'codepen'		=> esc_html__('CodePen', 'catch-web-tools'),
		// 'path'			=> esc_html__('Path', 'catch-web-tools'),
		// 'dribbble'		=> esc_html__('Dribbble', 'catch-web-tools'),
		// 'skype'			=> esc_html__('Skype', 'catch-web-tools'),
		// 'digg'			=> esc_html__('Digg', 'catch-web-tools'),
		// 'reddit'		=> esc_html__('Reddit', 'catch-web-tools'),
		// 'stumbleupon'	=> esc_html__('Stumbleupon', 'catch-web-tools'),
		// 'pocket'		=> esc_html__('Pocket', 'catch-web-tools'),
		// 'dropbox'		=> esc_html__('DropBox', 'catch-web-tools'),
		// 'spotify'		=> esc_html__('Spotify', 'catch-web-tools'),
		// 'foursquare'	=> esc_html__('Foursquare', 'catch-web-tools'),
		// 'twitch'		=> esc_html__('Twitch', 'catch-web-tools'),
		// 'website'		=> esc_html__('Website', 'catch-web-tools'),
		// 'phone'			=> esc_html__('Phone', 'catch-web-tools'),
		// 'handset'		=> esc_html__('Handset', 'catch-web-tools'),
		// 'cart'			=> esc_html__('Cart', 'catch-web-tools'),
		// 'cloud'			=> esc_html__('Cloud', 'catch-web-tools'),
		// 'link'			=> esc_html__('Link', 'catch-web-tools'),
		// 'vk'			=> esc_html__('VK', 'catch-web-tools'),


	);

	return apply_filters('catchwebtools_get_social_icons_list', $options);
}



/**
 * Returns list of default options of to top module
 *
 * @since Catch Web Tools 1.8
 */
function catchwebtools_to_top_default_options($option = null)
{
	$default_options = array(
		//Basic Settings
		'status'					=> 0,
		'scroll_offset'				=> '100',
		'icon_opacity'				=> '50',
		'style'						=> 'icon',

		//Icon Settings
		'icon_type'					=> 'dashicons-arrow-up-alt2',
		'icon_color'				=> '#ffffff',
		'icon_bg_color'				=> '#000000',
		'icon_size'					=> '32',
		'border_radius'				=> '5',

		//Image Settings
		'image'						=> CATCHWEBTOOLS_URL . 'to-top/admin/images/default.png',
		'image_width'				=> '65',
		'image_alt'					=> '',

		//Advanced Settings
		'location'					=> 'bottom-right',
		'margin_x'					=> '20',
		'margin_y'					=> '20',
		'show_on_admin'				=> 0,
		'enable_autohide'			=> 0,
		'autohide_time'				=> '2',
		'enable_hide_small_device'	=> 0,
		'small_device_max_width'	=> '640',

		//Reset Settings
		'reset'						=> 0,
	);

	if (null == $option) {
		return apply_filters('catchwebtools_to_top_options', $default_options);
	} else {
		return $default_options[$option];
	}
}

/**
 * Returns list of default options of SEO module
 *
 * @since Catch Web Tools 1.8
 */
function catchwebtools_webmaster_default_options()
{
	$defaults = array(
		'status' => 0
	);

	return $defaults;
}


/**
 * Returns list of default options of SEO module
 *
 * @since Catch Web Tools 1.8
 */
function catchwebtools_seo_default_options()
{
	$defaults = array(
		'status' => 0
	);

	return $defaults;
}


/**
 * Returns list of default options of Open Graph module
 *
 *  @since Catch Web Tools 1.8
 */
function catchwebtools_og_default_options()
{
	$defaults = array(
		'status' => 0
	);

	return $defaults;
}


/**
 * Returns list of default options of Catch IDs module
 *
 * @since Catch Web Tools 1.8
 */
function catchwebtools_catch_ids_default_options()
{
	$types = catchwebtools_catchids_get_all_post_types();
	foreach ($types as $key => $value) {
		$defaults[$key] = 1;
	}
	$defaults['category'] = 1;
	$defaults['media'] = 1;
	$defaults['user'] = 1;
	$defaults['comment'] = 1;
	$defaults['status'] = 0;

	return $defaults;
}


/**
 * Returns list of default options of Social Icons module
 *
 * @since Catch Web Tools 1.8
 */
function catchwebtools_social_default_options()
{
	$defaults = array(
		'status'                  => 0,
		'social_icon_brand_color' => 0,
		'social_icon_size'        => 32,
		'social_icon_color'       => '#504f4f',
		'social_icon_hover_color' => '#504f4f',
	);

	return $defaults;
}

/**
 * Returns list of default options of Catch Updater module
 *
 * @since Catch Web Tools 1.8
 */
function catchwebtools_catch_updater_default_options()
{
	$defaults = array(
		'status' => 0
	);

	return $defaults;
}

/**
 * Returns list of default options of Catch Updater module
 *
 * @since Catch Web Tools 1.8
 */
function catchwebtools_big_image_size_threshold_default_options()
{
	$defaults = array(
		'status' => 0,
		'max'    => 2560
	);

	return $defaults;
}


/**
 * Returns list of available hooks_suffix for admin
 *
 * @since Catch Web Tools 1.6
 */
function catchwebtools_admin_hook_suffix()
{
	$options = array(
		'toplevel_page_catch-web-tools',
		'catch-web-tools_page_catch-web-tools-webmasters',
		'catch-web-tools_page_catch-web-tools-catch-ids',
		'catch-web-tools_page_catch-web-tools-custom-css',
		'catch-web-tools_page_catch-web-tools-custom-css',
		'catch-web-tools_page_catch-web-tools-custom-css',
		'catch-web-tools_page_catch-web-tools-custom-css',
		'catch-web-tools_page_catch-web-tools-social-icons',
		'catch-web-tools_page_catch-web-tools-opengraph',
		'catch-web-tools_page_catch-web-tools-seo',
		'catch-web-tools_page_catch-web-tools-to-top'
	);
	return apply_filters('catchwebtools_admin_hook_suffix', $options);
}
