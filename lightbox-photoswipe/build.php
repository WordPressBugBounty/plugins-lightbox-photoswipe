<?php
namespace LightboxPhotoSwipe;

defined('ABSPATH') or die();

use MatthiasMullie\Minify;

require(__DIR__ . '/vendor/autoload.php');

if (!defined('PHP_VERSION_ID')) {
    $version = explode('.', PHP_VERSION);
    define('PHP_VERSION_ID', ($version[0] * 10000 + $version[1] * 100 + $version[2]));
}
if (PHP_VERSION_ID < 80300) {
    echo "=================================================================\n";
    echo "Warning! You are using a very old PHP version!\n";
    echo "This is no supported any may cause errors or unpredicted results!\n";
    echo "Please use at least PHP 8.3!\n";
    echo "=================================================================\n";
}

/**
 * Helper class to build the frontend assets
 */
class Build
{
    /**
     * Build minified frontend assets
     */
    public function buildAssets()
    {
        // Frontend script:
        // Combine all frontend scripts to one minified file

        echo "Building frontend scripts for PhotoSwipe 5\n";

        $minifyJs = new Minify\JS();
        $minifyJs->add('assets/ps5/frontend.js');
        $minifyJs->add('assets/purify/purify.js');
        $minifyJs->minify('assets/ps5/frontend.min.js');

        $minifyJs = new Minify\JS();
        $minifyJs->add('assets/ps5/dynamic-caption/photoswipe-dynamic-caption-plugin.esm.js');
        $minifyJs->minify('assets/ps5/dynamic-caption/photoswipe-dynamic-caption-plugin.esm.min.js');

        $minifyJs = new Minify\JS();
        $minifyJs->add('assets/ps5/auto-hide-ui/photoswipe-auto-hide-ui.esm.js');
        $minifyJs->minify('assets/ps5/auto-hide-ui/photoswipe-auto-hide-ui.esm.min.js');

        $minifyJs = new Minify\JS();
        $minifyJs->add('assets/ps5/fullscreen/photoswipe-fullscreen.esm.js');
        $minifyJs->minify('assets/ps5/fullscreen/photoswipe-fullscreen.esm.min.js');

        $minifyJs = new Minify\JS();
        $minifyJs->add('assets/ps5/download/photoswipe-download.esm.js');
        $minifyJs->minify('assets/ps5/download/photoswipe-download.esm.min.js');

        // Styles for PhotoSwipe 5
        echo sprintf("Building style for PhotoSwipe 5\n");

        $minifyCss = new Minify\CSS();
        $minifyCss->addFile('assets/ps5/lib/photoswipe-local.css');
        $minifyCss->addFile('assets/ps5/dynamic-caption/photoswipe-dynamic-caption-plugin.css');
        $minifyCss->minify('assets/ps5/styles/main.css');
    }
}

$build = new Build();
$build->buildAssets();
