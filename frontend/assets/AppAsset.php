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
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        //'yii\bootstrap4\BootstrapAsset',
    ];

    /**
     *
     */
    public function init()
    {
        $this->css = static::getCss();
        $this->js = static::getJs();

        return parent::init();
    }

    /**
     * @return array
     */
    private static function getCss()
    {
        return [

        ];
    }

    /**
     * @return array
     */
    private static function getJs()
    {
        return [

        ];
    }
}
