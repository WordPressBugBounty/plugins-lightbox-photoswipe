<?php
defined('ABSPATH') or die();

if(!defined('WP_UNINSTALL_PLUGIN')) exit();

require(__DIR__ . '/src/LightboxPhotoSwipe/ExifHelper.php');
require(__DIR__ . '/src/LightboxPhotoSwipe/OptionsManager.php');
require(__DIR__ . '/src/LightboxPhotoSwipe/LightboxPhotoSwipe.php');

$lightbox_photoswipe = new LightboxPhotoSwipe(__FILE__);
$lightbox_photoswipe->uninstallPluginData();
