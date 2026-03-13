<?php

// Exit if accessed directly
if (! defined('ABSPATH')) exit;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>

	<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<title><?php echo esc_html(get_bloginfo('name')) . ': ' . esc_html__('Site Under Maintainance', 'catch-web-tools'); ?></title>
</head>

<body>
	<div class="pusher"><!-- centers next div --></div>
	<div class="content"><?php echo esc_html(get_transient('catch_updater_update_message')); ?></div>
</body>

</html>