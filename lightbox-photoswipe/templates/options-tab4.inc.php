<?php defined('ABSPATH') or die(); ?>
<table id="lbwps-tab-4" class="form-table" style="display:none;">
    <tr>
        <th scope="row">
            <?php echo esc_html__('General', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlCheckbox('show_caption'); ?> <?php echo esc_html__('Show caption if available', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('usepostdata'); ?> <?php echo esc_html__('Get the image captions from the database (this may cause delays on slower servers)', 'lightbox-photoswipe'); ?></label>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('Used elements', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlCheckbox('usetitle'); ?> <?php echo esc_html__('Title', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('usecaption'); ?> <?php echo esc_html__('Caption', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('usedescription'); ?> <?php echo esc_html__('Description', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('use_alt'); ?> <?php echo esc_html__('Alternative text', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('usefilename'); ?> <?php echo esc_html__('File name', 'lightbox-photoswipe'); ?></label><br>
        </td>
    </tr>
    <tr>
        <th scope="row">
            <?php echo esc_html__('EXIF information', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlCheckbox('showexif'); ?> <?php echo esc_html__('Show EXIF information if available', 'lightbox-photoswipe'); ?><?php if (!function_exists('exif_read_data')) { ?>(<?php echo esc_html__('<a href="https://www.php.net/manual/en/book.exif.php" target="_blank">the PHP EXIF extension</a> is missing on this server!', 'lightbox-photoswipe'); ?>)<?php } ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_lens'); ?> <?php echo esc_html__('Show lens name if available', 'lightbox-photoswipe'); ?></label><br>
            <label><?php $this->uiControlCheckbox('showexif_date'); ?> <?php echo esc_html__('Show date if available', 'lightbox-photoswipe'); ?></label>
        </td>
    </tr>
    <tr class="lbwps-ver5">
        <th scope="row">
            <?php echo esc_html__('Type of caption', 'lightbox-photoswipe'); ?>
        </th>
        <td>
            <label><?php $this->uiControlRadio('caption_type', ['auto', 'aside', 'below', 'overlay'], [esc_html__('dynamic, automatic', 'lightbox-photoswipe'), esc_html__('dynamic, aside', 'lightbox-photoswipe'), esc_html__('dynamic, below', 'lightbox-photoswipe'), esc_html__('overlay', 'lightbox-photoswipe')], '<br>'); ?></label>
        </td>
    </tr>
</table>
