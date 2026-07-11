<?php defined('ABSPATH') or die(); ?>
<div id="lbwps-tab-5" style="display:none;">
    <div class="lbwps-ver4">
        <table class="form-table">
            <tr>
                <th scope="row">
                    <?php echo esc_html__('Visible sharing options', 'lightbox-photoswipe'); ?>
                </th>
                <td>
                    <label><?php $this->uiControlCheckbox('share_facebook'); ?> <?php echo esc_html__('Share on Facebook', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('share_twitter'); ?> <?php echo esc_html__('Tweet', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('share_direct'); ?> <?php echo esc_html__('Use URL of images instead of lightbox on Facebook and Twitter', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('share_pinterest'); ?> <?php echo esc_html__('Pin it', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('share_download'); ?> <?php echo esc_html__('Download image', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('share_copyurl'); ?> <?php echo esc_html__('Copy image URL', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('share_custom'); ?> <?php echo esc_html__('Custom link', 'lightbox-photoswipe'); ?></label>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo esc_html__('Custom link, label', 'lightbox-photoswipe'); ?>
                </th>
                <td>
                    <?php $this->uiControltext('share_custom_label', esc_html__('Your label here', 'lightbox-photoswipe')); ?>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo esc_html__('Custom link, URL', 'lightbox-photoswipe'); ?>
                </th>
                <td>
                    <?php $this->uiControltext('share_custom_link', '{{raw_image_url}}'); ?>
                    <p class="description"><?php echo esc_html__('Placeholders for the link:', 'lightbox-photoswipe'); ?><br>
                        {{raw_url}}&nbsp;&ndash;&nbsp;<?php echo esc_html__('URL of the lightbox', 'lightbox-photoswipe'); ?><br>
                        {{url}}&nbsp;&ndash;&nbsp;<?php echo esc_html__('encoded URL of the lightbox', 'lightbox-photoswipe'); ?><br>
                        {{raw_image_url}}&nbsp;&ndash;&nbsp;<?php echo esc_html__('URL of the image', 'lightbox-photoswipe'); ?><br>
                        {{image_url}}&nbsp;&ndash;&nbsp;<?php echo esc_html__('encoded URL of the image', 'lightbox-photoswipe'); ?><br>
                        {{text}}&nbsp;&ndash;&nbsp;<?php echo esc_html__('image caption', 'lightbox-photoswipe'); ?></p>
                </td>
            </tr>
        </table>
    </div>
    <div class="lbwps-ver5">
        <p class="lbwps_text"><?php echo esc_html__('Sharing options are not yet supported for PhotoSwipe 5.', 'lightbox-photoswipe') ?></p>
    </div>
</div>