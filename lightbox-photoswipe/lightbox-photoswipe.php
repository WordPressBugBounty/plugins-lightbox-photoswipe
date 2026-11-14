<?php
/*
Plugin Name: Lightbox with PhotoSwipe
Plugin URI: https://wordpress.org/plugins/lightbox-photoswipe/
Description: Lightbox with PhotoSwipe
Version: 5.22.0
Author: Arno Welzel
Author URI: http://arnowelzel.de
Text Domain: lightbox-photoswipe
License: GPLv2
*/
namespace LightboxPhotoSwipe;

defined('ABSPATH') or die();

require(__DIR__ . '/src/LightboxPhotoSwipe/ExifHelper.php');
require(__DIR__ . '/src/LightboxPhotoSwipe/OptionsManager.php');
require(__DIR__ . '/src/LightboxPhotoSwipe/LightboxPhotoSwipe.php');

// Initialize plugin

$lightbox_photoswipe = LightboxPhotoSwipe::instance(__FILE__);
