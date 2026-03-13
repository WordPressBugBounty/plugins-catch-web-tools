<?php

// Exit if accessed directly
if (! defined('ABSPATH')) exit;

/**
 * @package Admin
 * @sub-package Admin Opengraph Display
 */
?>
<?php include('header.php'); ?>
<div id="opengraph">
    <div class="content-wrapper">
        <div class="header">
            <h3><?php esc_html_e('Opengraph', 'catch-web-tools'); ?></h3>
        </div> <!-- .header -->
        <div class="content">
            <form method="post" action="options.php">
                <?php settings_fields('opengraph-settings-group'); ?>
                <?php $settings    =    catchwebtools_get_options('catchwebtools_opengraph'); ?>
                <div class="option-container">
                    <h3 class="option-toggle option-active"><a href="#"><?php esc_html_e('Enable Open Graph Module', 'catch-web-tools'); ?></a></h3>
                    <div class="option-content inside open">
                        <table class="form-table">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Enable Open Graph Module', 'catch-web-tools'); ?></th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['status']) && $settings['status']) ? 'checked' : '';
                                        echo '<input type="checkbox" ' . esc_html($text) . ' name="catchwebtools_opengraph[status]" value="1"/>&nbsp;&nbsp;' . esc_html__('Check to Enable', 'catch-web-tools');
                                        echo '<p class="description">' . esc_html__('Add Open Graph meta data to your site\'s <code>&lt;head&gt;</code> section. You can specify some of the IDs that are sometimes needed below:', 'catch-web-tools') . '<p class="description">';
                                        echo '<p class="description">' . esc_html__('Open Graph tags for specific Pages or Posts, can be added via Catch Web Tools Custom Meta Box which shows up in Pages\' and Posts\' add/edit sections once this function is enabled.', 'catch-web-tools') . '</p>';
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php submit_button('Save Changes'); ?>
                    </div>

                    <h3 class="option-toggle"><a href="#"><?php esc_html_e('Facebook Settings', 'catch-web-tools'); ?></a></h3>
                    <div class="option-content inside">
                        <table class="form-table">
                            <tbody>
                                <tr>
                                    <th scope="row"><?php esc_html_e('Facebook App ID', 'catch-web-tools'); ?></th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['fb:app_id'])) ? esc_attr($settings['fb:app_id']) : '';
                                        echo '<input type="text" size="80" name="catchwebtools_opengraph[fb:app_id]" value="' . esc_html($text) . '" />';
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php submit_button('Save Changes'); ?>
                    </div>




                    <h3 class="option-toggle"><a href="#"><?php esc_html_e('Homepage Settings', 'catch-web-tools'); ?></a></h3>
                    <div class="option-content inside">
                        <table class="form-table">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <?php esc_html_e('Title', 'catch-web-tools'); ?>
                                    </th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['og:title'])) ? esc_attr($settings['og:title']) : get_bloginfo('name');
                                        echo '<input type="text" size="80" name="catchwebtools_opengraph[og:title]" value="' . esc_attr($text) . '" /><p id="description">og:title tag</p>';
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <?php esc_html_e('Type', 'catch-web-tools'); ?>
                                    </th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['og:type'])) ? esc_attr($settings['og:type']) : '';
                                        $options    =    array('website', 'music.song', 'music.radio_station', 'music.playlist', 'music.album', 'video.movie', 'video.tv_show', 'video.episode', 'video.other', 'article', 'book', 'profile');
                                        echo '<select name="catchwebtools_opengraph[og:type]" class="catchwebtools_opengraph_type">';
                                        echo '<option value="">-</option>';
                                        foreach ($options as $option) {
                                            echo '<option value="' . esc_attr($option) . '" ';
                                            if ($text == $option)
                                                echo 'selected="true"';
                                            echo '>' . esc_attr($option) . '</option>';
                                        }
                                        echo '</select><p id="description">og:type tag</p>';
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <?php esc_html_e('URL', 'catch-web-tools'); ?>
                                    </th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['og:url'])) ? esc_attr($settings['og:url']) : home_url();
                                        echo '<input type="text" size="80" name="catchwebtools_opengraph[og:url]" value="' . esc_attr($text) . '" /><p id="description">og:url tag</p>';
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <?php esc_html_e('Description', 'catch-web-tools'); ?>
                                    </th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['og:description'])) ? esc_attr($settings['og:description']) : esc_attr(get_bloginfo('description'));
                                        echo '<textarea cols="80" rows="7" name="catchwebtools_opengraph[og:description]" >' . esc_attr($text) . '</textarea><p id="description">og:description tag</p>';
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <?php esc_html_e('Sitename', 'catch-web-tools'); ?>
                                    </th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['og:site_name'])) ? esc_attr($settings['og:site_name']) : get_bloginfo('name');
                                        echo '<input type="text" size="80" name="catchwebtools_opengraph[og:site_name]" value="' . esc_attr($text) . '" /><p id="description">og:site_name tag</p>';
                                        ?>
                                    </td>
                                </tr>

                                <tr>
                                    <th scope="row">
                                        <?php esc_html_e('Locale', 'catch-web-tools'); ?>
                                    </th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['og:locale'])) ? esc_attr($settings['og:locale']) : '';
                                        echo '<input type="text" size="80" name="catchwebtools_opengraph[og:locale]" value="' . esc_attr($text) . '" /><p id="description">og:locale tag</p>';
                                        ?>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                        <?php submit_button('Save Changes'); ?>
                    </div>

                    <h3 class="option-toggle"><a href="#"><?php esc_html_e('Default Settings', 'catch-web-tools'); ?></a></h3>
                    <div class="option-content inside">
                        <table class="form-table">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <?php esc_html_e('Default Image', 'catch-web-tools'); ?>
                                    </th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['og:default_image'])) ? esc_attr($settings['og:default_image']) : '';
                                        echo '
                                                <input type="url" class="upload-url" size="80" name="catchwebtools_opengraph[og:default_image]" value="' . esc_attr($text) . '" />
                                                <input id="st_upload_button" class="st_upload_button button" name="catchwebtools_opengraph[og:default_image]" type="button" value="' . esc_attr('Upload', 'catch-web-tools') . '" />';
                                        echo '<p class="description">' . esc_html__('This image is used if the post/page being shared does not contain any images.', 'catch-web-tools') . '</p>';
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php submit_button('Save Changes'); ?>
                    </div>

                    <h3 class="option-toggle"><a href="#"><?php esc_html_e('Custom Settings (Only for Advanced Users)', 'catch-web-tools'); ?></a></h3>
                    <div class="option-content inside">
                        <table class="form-table">
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        <?php esc_html_e('Custom Tags', 'catch-web-tools'); ?>
                                    </th>
                                    <td>
                                        <?php
                                        $text    =    (! empty($settings['custom'])) ? esc_attr($settings['custom']) : '';
                                        echo '<textarea cols="80" rows="7"  name="catchwebtools_opengraph[custom]" >' . esc_attr($text) . '</textarea>';
                                        echo '<p class="description">' . esc_html__('For any other type of Open Graph tags.', 'catch-web-tools') . '</p>';
                                        echo '<p class="description">' . esc_html__('E.g:', 'catch-web-tools') . '<code>&lt;meta property="og:audio" content="http://example.com/sound.mp3" /&gt;</code>';
                                        echo '<p class="description">' . esc_html__('If you do not know what this is, you should probably leave it empty.', 'catch-web-tools');
                                        ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <?php submit_button('Save Changes'); ?>
                    </div>


                </div>
            </form>
        </div><!-- .content -->
    </div><!-- .content-wrapper -->
</div><!-- #customcss -->

<?php include('main-footer.php'); ?>