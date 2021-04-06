<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/leaflet.css',
        'https://api.mqcdn.com/sdk/place-search-js/v1.0.0/place-search.css',
        'css/medical-admin/css/bootstrap.css',
        'css/medical-admin/css/font-awesome.css',
        'css/medical-admin/css/superslides.css',
        'css/medical-admin/css/prettyPhoto.css',
        'css/medical-admin/css/isotope.css',
        'css/medical-admin/css/animate.min.css',
        'css/medical-admin/css/style.css',
        'css/medical-admin/css/media.css',
    ];

    public $js = [
        'css/medical-admin/js/jquery.js',
        'css/medical-admin/js/jquery-migrate-1.2.min.js',
        'css/medical-admin/js/jquery.easi.1.3.js',
        'css/medical-admin/js/superfish.js',
        'css/medical-admin/js/jquery.queryloader2.js',
        'css/medical-admin/js/jquery.superslides.js',
        'css/medical-admin/js/jquery.caroufredsel.js',
        'css/medical-admin/js/jquery.touchSwipe.min.js',
        'css/medical-admin/js/jquery.ui.totop.js',
        'css/medical-admin/js/jquery.equalheights.js',
        'css/medical-admin/js/jquery.parallax-1.1.3.resize.js',
        'css/medical-admin/js/SmoothScroll.js',
        'css/medical-admin/js/jquery.prettyPhoto.js',
        'css/medical-admin/js/jquery.isotope.min.js',
        'css/medical-admin/js/cform.js',
        'css/medical-admin/js/scripts.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
