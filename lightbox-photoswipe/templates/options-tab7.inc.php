<?php defined('ABSPATH') or die(); ?>
<div id="lbwps-tab-7"  style="display:none;">
    <div class="lbwps-ver4">
        <table class="form-table">
            <tr>
                <th scope="row">
                    <?php echo esc_html__('General', 'lightbox-photoswipe'); ?>
                </th>
                <td>
                    <label><?php $this->uiControlCheckbox('close_on_drag'); ?> <?php echo esc_html__('Close with vertical drag in mobile view', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('pinchtoclose'); ?> <?php echo esc_html__('Enable pinch to close gesture on mobile devices', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('taptotoggle'); ?> <?php echo esc_html__('Enable tap to toggle controls on mobile devices', 'lightbox-photoswipe'); ?></label><br>
                </td>
            </tr>
        </table>
    </div>
    <div class="lbwps-ver5">
        <p class="lbwps_text"><?php echo esc_html__('Mobile options are not yet supported for PhotoSwipe 5.', 'lightbox-photoswipe') ?></p>
    </div>
</div>