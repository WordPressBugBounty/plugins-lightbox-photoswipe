<?php
namespace LightboxPhotoSwipe;

defined('ABSPATH') or die();

/**
 * Options manager
 */
class OptionsManager
{
    const OPTIONS = [
        'db_version' => [ 'default' => '0' ],

        // General
        'disabled_post_ids' => [ 'default' => '', 'type' => 'list' ],
        'metabox' => [ 'default' => '1' ],
        'disabled_post_types' => [ 'default' => '', 'type' => 'list' ],
        'show_fullscreen' => [ 'default' => '1' ],
        'show_download' => [ 'default' => '0' ],
        'history' => [ 'default' => '1' ],
        'loop' => [ 'default' => '1' ],
        'separate_galleries' => [ 'default' => '0' ],
        'ignore_external' => [ 'default' => '0' ],
        'ignore_hash' => [ 'default' => '0' ],
        'hide_scrollbars' => [ 'default' => '1' ],
        'fix_links' => [ 'default' => '1' ],
        'fix_scaled' => [ 'default' => '1' ],
        'fix_attachment_links' => [ 'default' => '0' ],
        'support_multiple_domain_mapping' => [ 'default' => 1 ],
        'use_transients' => [ 'default' => '1' ],
        'svg_scaling' => [ 'default' => '200' ],
        'cdn_url' => [ 'default' => '' ],
        'cdn_mode' => [ 'default' => 'prefix' ],

        // Theme
        'spacing' => [ 'default' => '12' ],
        'bg_opacity' => [ 'default' => '100' ],
        'padding_left' => [ 'default' => '0' ],
        'padding_top' => [ 'default' => '0' ],
        'padding_right' => [ 'default' => '0' ],
        'padding_bottom' => [ 'default' => '0' ],
        'max_width' => [ 'default' => '' ],
        'max_height' => [ 'default' => '' ],

        // Captions

        'show_caption' => [ 'default' => '1' ],
        'usepostdata' => [ 'default' => '0' ],
        'usetitle' => [ 'default' => '0' ],
        'usecaption' => [ 'default' => '1' ],
        'usedescription' => [ 'default' => '0' ],
        'use_alt' => [ 'default' => '0' ],
        'usefilename' => [ 'default' => '0' ],
        'showexif' => [ 'default' => '0' ],
        'showexif_date' => [ 'default' => '0' ],
        'showexif_lens' => [ 'default' => '0' ],
        'caption_type' => [ 'default' => 'overlay' ],

        // Desktop

        'desktop_slider' => [ 'default' => '1' ],
        'close_on_click' => [ 'default' => '1' ],
        'idletime' => [ 'default' => '4000' ],
    ];

    public $options;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->loadOptions();
    }

    /**
     * Register options
     */
    public function registerOptions()
    {
        foreach (self::OPTIONS as $optionName => $option) {
            register_setting(
                'lightbox-photoswipe-settings-group',
                'lightbox_photoswipe_'.$optionName,
                [
                    'type' => 'string',
                    'sanitize_callback' => 'sanitize_text_field',
                ]
            );
        }
    }

    /**
     * Delete options
     */
    public function deleteOptions()
    {
        foreach (self::OPTIONS as $optionName => $option) {
            delete_option('lightbox_photoswipe_'.$optionName);
            $this->setOption($optionName, '');
        }
    }

    /**
     * Set option
     */
    public function setOption($name, $value, $save = false)
    {
        $this->options[$name] = $value;
        if ($save) {
            switch($this->getOptionType($name)) {
                case 'list':
                    $option = implode(',', $value);
                    break;
                default:
                    $option = $value;
                    break;
            }
            update_option('lightbox_photoswipe_'.$name, $option);
        }
    }

    /**
     * Get option
     */
    public function getOption($name)
    {
        if (isset($this->options[$name])) {
            return $this->options[$name];
        }

        switch ($this->getOptionType($name)) {
            case 'list':
                return [];
            default:
                return '';
        }
    }

    /**
     * Get option type
     */
    public function getOptionType($name)
    {
        $option = self::OPTIONS[$name];
        if (isset($option['type'])) {
            return $option['type'];
        }

        return 'string';
    }

    /**
     * Load options
     */
    public function loadOptions()
    {
        foreach (self::OPTIONS as $nameValue => $option) {
            $nameOption = 'lightbox_photoswipe_'.$nameValue;
            $default = $option['default'];

            switch ($this->getOptionType($nameValue)) {
                case 'list':
                    $value = trim(get_option($nameOption, $default));
                    if ('' === $value) {
                        $this->setOption($nameValue, []);
                    } else {
                        $this->setOption($nameValue, explode(',', $value));
                    }
                    break;
                default:
                    $value = get_option($nameOption, $default);
                    $this->setOption($nameValue, $value);
                    break;
            }
        }
    }
}
