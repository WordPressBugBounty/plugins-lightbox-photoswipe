<?php defined('ABSPATH') or die(); ?>
<div id="lbwps-tab-5" style="display:none;">
    <div>
        <table class="form-table">
            <tr>
                <th scope="row">
                    <?php echo esc_html__('General', 'lightbox-photoswipe'); ?>
                </th>
                <td>
                    <label><?php $this->uiControlCheckbox('desktop_slider'); ?> <?php echo esc_html__('Use slide animation when switching images in desktop view', 'lightbox-photoswipe'); ?></label><br>
                    <label><?php $this->uiControlCheckbox('close_on_click'); ?> <?php echo esc_html__('Close the lightbox by clicking outside the image', 'lightbox-photoswipe'); ?></label>
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <?php echo esc_html__('Idle time for controls', 'lightbox-photoswipe'); ?>
                </th>
                <td>
                    <select id="lightbox_photoswipe_idletime" name="lightbox_photoswipe_idletime">
                        <?php
                        echo '<option value="0"';
                        if ((int)$this->optionsManager->getOption('idletime') === 0) {
                            echo ' selected="selected"';
                        }
                        echo '>'.esc_html__('never hide automatically', 'lightbox-photoswipe').'</option>';
                        for ($idletime = 1000; $idletime <= 10000; $idletime+=1000) {
                            echo '<option value="'.esc_html($idletime).'"';
                            if ((int)$this->optionsManager->getOption('idletime') === $idletime) {
                                echo ' selected="selected"';
                            }
                            echo '>'.esc_html($idletime/1000).' '.esc_html(_n('second','seconds', $idletime/1000, 'lightbox-photoswipe'));
                            if ($idletime == 4000) {
                                echo ' ('.esc_html__('Default', 'lightbox-photoswipe').')';
                            }
                            echo '</option>';
                        }
                        ?>
                    </select>
                    <p class="description"><?php echo esc_html__('Time until the on screen controls will disappear automatically in desktop view. Note: Keeping controls visible is only supported with PhotoSwipe 5.', 'lightbox-photoswipe'); ?></p>
                </td>
            </tr>
        </table>
    </div>
</div>