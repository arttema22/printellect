<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
        'css/mis.css',
    ];
    public $js = [
        'js/main.js',
        'js/jquery.catslider.js',
        'js/modernizr.custom.63321.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    //public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
