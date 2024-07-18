<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/jquery.fancybox.min.css',
        'css/jquery-ui.min.css',
        'css/chosen.css',
        'css/site.css',
        'css/admin.css',
    ];
    public $js = [
        'js/jquery.fancybox.min.js',
        'js/jquery-ui.min.js',
        'js/chosen.jquery.min.js',
        'js/inputmask.js',
        'js/jquery.inputmask.js',
        'js/functions.js',
        'js/common.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap5\BootstrapAsset',
    ];
}
