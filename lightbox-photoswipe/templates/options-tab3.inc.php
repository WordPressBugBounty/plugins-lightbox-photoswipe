<?php defined('ABSPATH') or die(); ?>
<table id="lbwps-tab-3" class="form-table" style="display:none;">
    <tr class="lbwps-ver4">
        <th scope="row">
            <?php echo esc_html__('Skin', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <?php $this->uiControlRadio(
                'skin',
                [
                    '1',
                    '2',
                    '3',
                    '4'
                ],
                [
                    esc_html__('Original', 'lightbox-photoswipe'),
                    esc_html__('Original with solid background', 'lightbox-photoswipe'),
                    esc_html__('New share symbol', 'lightbox-photoswipe'),
                    esc_html__('New share symbol with solid background', 'lightbox-photoswipe'),
                ],
                '<br>'
            );
            ?>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('Spacing between pictures', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <select id="lightbox_photoswipe_spacing" name="lightbox_photoswipe_spacing">
                <?php
                for ($spacing = 0; $spacing < 13; $spacing++) {
                    echo '<option value="'.esc_html($spacing).'"';
                    if ((int)$this->optionsManager->getOption('spacing') === $spacing) echo ' selected="selected"';
                    echo '>'.esc_html($spacing).'%';
                    if ($spacing === 12) echo ' ('.esc_html__('Default', 'lightbox-photoswipe').')';
                    echo '</option>';
                }
                ?>
            </select>
            <p class="description"><?php echo esc_html__('Space between pictures relative to screenwidth.', 'lightbox-photoswipe'); ?></p>
        </td>
    </tr>
    <tr class="lbwps-ver5">
        <th scope="row">
            <?php echo esc_html__('Background opacity', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <select id="lightbox_photoswipe_bg_opacity" name="lightbox_photoswipe_bg_opacity">
                <?php
                for ($bg_opacity = 0; $bg_opacity <= 100; $bg_opacity += 10) {
                    echo '<option value="'.esc_html($bg_opacity).'"';
                    if ((int)$this->optionsManager->getOption('bg_opacity') === $bg_opacity) echo ' selected="selected"';
                    echo '>'.esc_html($bg_opacity).'%';
                    if ($bg_opacity === 100) echo ' ('.esc_html__('Default', 'lightbox-photoswipe').')';
                    echo '</option>';
                }
                ?>
            </select>
            <p class="description"><?php echo esc_html__('Opacity of the background for the lightbox (values below 100% may not work well with some caption styles).', 'lightbox-photoswipe'); ?></p>
        </td>
    </tr>
    <tr class="lbwps-ver5">
        <th scope="row">
            <?php echo esc_html__('Image padding', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php echo esc_html__('left', 'lightbox-photoswipe'); ?>: <?php $this->uiControlNumber('padding_left', '', 'small-text') ?></label>
            <label><?php echo esc_html__('top', 'lightbox-photoswipe'); ?>: <?php $this->uiControlNumber('padding_top', '', 'small-text') ?></label>
            <label><?php echo esc_html__('right', 'lightbox-photoswipe'); ?>: <?php $this->uiControlNumber('padding_right', '', 'small-text') ?></label>
            <label><?php echo esc_html__('bottom', 'lightbox-photoswipe'); ?>: <?php $this->uiControlNumber('padding_bottom', '', 'small-text') ?></label>
            <p class="description"><?php echo esc_html__('Padding around the image in px.', 'lightbox-photoswipe'); ?></p>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('Maximum image size', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php echo esc_html__('width', 'lightbox-photoswipe'); ?>: <?php $this->uiControlNumber('max_width', '', 'small-text') ?></label>
            <label><?php echo esc_html__('height', 'lightbox-photoswipe'); ?>: <?php $this->uiControlNumber('max_height', '', 'small-text') ?></label>
            <p class="description"><?php echo esc_html__('Maximum width or height to be used for images in px, leave empty for automatic sizing.', 'lightbox-photoswipe'); ?></p>
        </td>
    </tr>
</table>
