<?php defined('ABSPATH') or die(); ?>
<table id="lbwps-tab-2" class="form-table">
    <tr>
        <th scope="row">
            <?php echo esc_html__('PhotoSwipe version to use', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <?php $this->uiControlRadio('version', ['4', '5'], [esc_html__('version 4', 'lightbox-photoswipe'), esc_html__('version 5', 'lightbox-photoswipe')], ' '); ?>
            <p class="description"><?php echo esc_html__('The available options depend on the PhotoSwipe version. UI customizations done for version 4 may not work for version 5.', 'lightbox-photoswipe'); ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('Excluded pages/posts', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <?php $this->uiControlText('disabled_post_ids') ?>
            <p class="description"><?php echo esc_html__('Enter a comma separated list with the numerical IDs of the pages/posts where the lightbox should not be used. This can also be changed in the page/post itself.', 'lightbox-photoswipe'); ?></p>
            <p><label for="lightbox_photoswipe_metabox"><?php $this->uiControlCheckbox('metabox') ?>&nbsp;<?php echo esc_html__('Show this setting as checkbox in page/post editor', 'lightbox-photoswipe'); ?></label></p>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('Excluded post types', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <?php $this->uiControlText('disabled_post_types') ?>
            <p class="description"><?php echo esc_html__('Enter a comma separated list of post types where the lightbox should not be used.', 'lightbox-photoswipe'); ?><br>
            <?php echo esc_html__('Available post types on this site', 'lightbox-photoswipe'); ?>: <?php $this->uiGetposttypes(); ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('Visible elements', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlCheckbox('show_fullscreen') ?>&nbsp;<?php echo esc_html__('Show fullscreen button', 'lightbox-photoswipe'); ?></label><br>
            <label class="lbwps-ver5"><?php $this->uiControlCheckbox('show_download') ?>&nbsp;<?php echo esc_html__('Show download button', 'lightbox-photoswipe'); ?></label>
            <label class="lbwps-ver4"><?php $this->uiControlCheckbox('show_counter') ?>&nbsp;<?php echo esc_html__('Show picture counter', 'lightbox-photoswipe'); ?></label><br>
            <label class="lbwps-ver4"><?php $this->uiControlCheckbox('show_zoom') ?>&nbsp;<?php echo esc_html__('Show zoom button if available', 'lightbox-photoswipe'); ?></label>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('Other options', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlCheckbox('history') ?>&nbsp;<?php echo esc_html__('Update browser history (going back in the browser will first close the lightbox)', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('loop') ?>&nbsp;<?php echo esc_html__('Allow infinite loop', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('separate_galleries') ?>&nbsp;<?php echo esc_html__('Show WordPress galleries and Gutenberg gallery blocks in separate lightboxes', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('ignore_external') ?>&nbsp;<?php echo esc_html__('Ignore links to images on other sites', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('ignore_hash') ?>&nbsp;<?php echo esc_html__('Ignore links to images which contain a hash (#)', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('hide_scrollbars') ?>&nbsp;<?php echo esc_html__('Hide scrollbars when opening the lightbox (this may not work with your theme)', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('fix_links') ?>&nbsp;<?php echo esc_html__('Fix links to images which include image sizes (e.g. "image-1024x768.jpg" instead of "image.jpg")', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('fix_scaled') ?>&nbsp;<?php echo esc_html__('Fix links to scaled or rotated images (e.g. "image.jpg" instead of "image-scaled.jpg" or "image-rotated.jpg")', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('fix_attachment_links') ?>&nbsp;<?php echo esc_html__('Fix links to attachment pages instead of images (may slow down your website)', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('support_multiple_domain_mapping') ?>&nbsp;<?php echo esc_html__('Support for <a href="https://wordpress.org/plugins/multiple-domain-mapping-on-single-site/" target="_blank">Multiple Domain Mapping on Single Site</a>', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('use_transients') ?>&nbsp;<?php echo esc_html__('Cache image information in transients (disabling this can slow down your website, try an object cache first)', 'lightbox-photoswipe'); ?></label><br>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('SVG scaling factor', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <select id="lightbox_photoswipe_svg_scaling" name="lightbox_photoswipe_svg_scaling">
                <?php
                for ($scaling = 100; $scaling < 550; $scaling += 50) {
                    echo '<option value="'.esc_html($scaling).'"';
                    if ((int)$this->optionsManager->getOption('svg_scaling') === $scaling) echo ' selected="selected"';
                    echo '>'.esc_html($scaling).'%';
                    if ($scaling === 200) echo ' ('.esc_html__('Default', 'lightbox-photoswipe').')';
                    echo '</option>';
                }
                ?>
            </select>
            <p class="description"><?php echo esc_html__('Factor by which SVG images get scaled when displayed in the lightbox.', 'lightbox-photoswipe'); ?>
            <?php if (!function_exists('simplexml_load_file')) { ?><br><?php echo esc_html__('<a href="https://www.php.net/manual/en/ref.simplexml.php" target="_blank">The PHP SimpleXML extension</a> is missing on this server! SVG images can not be displayed!', 'lightbox-photoswipe'); ?><?php } ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('CDN URL prefix', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <?php $this->uiControlText('cdn_url') ?>
            <p class="description"><?php echo esc_html__('If you use the JetPack CDN you can leave this setting empty – JetPack is already supported!', 'lightbox-photoswipe'); ?><br>
            <?php echo esc_html__('If you use a CDN plugin which adds an URL prefix in front of the image link, you can add this prefix (including "http://" or "https://") here. You can enter multiple prefixes separated by comma. The image meta data can then be retrieved from the local file and without loading the image from the CDN. You also need this if you want to use image captions from the WordPress database but serve images using a CDN.', 'lightbox-photoswipe'); ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('CDN mode', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <?php $this->uiControlRadio('cdn_mode', ['prefix', 'pull'], [esc_html__('Prefix', 'lightbox-photoswipe'), esc_html__('Pull', 'lightbox-photoswipe')], ' ') ?>
            <p class="description"><?php echo esc_html__('CDNs usually use "prefix mode" which adds the CDN domain in front of the whole URL. Some CDNs like ExactDN use "pull mode" which means only the domain of the website is replaced by the CDN domain. If images don\'t show up with the CDN active try another mode.', 'lightbox-photoswipe'); ?></p>
        </td>
    </tr>
</table>
