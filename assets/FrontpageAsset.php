<?php

namespace app\assets;

use yii\web\AssetBundle;

class FrontpageAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/style.css',
//        'css/frontpage.css',
//        'css/m1200.css',
//        'css/m1024.css',
//        'css/m768.css',
//        'css/m667.css',
//        'css/m375.css',
    ];
    public $js = [
//        'js/main.js',
//        'js/jquery.catslider.js',
//        'js/modernizr.custom.63321.js',
        'js/jquery.scrollify.min.js',
        'js/jquery.easing.1.3.min.js',
        'js/main_scroll.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

//    public $jsOptions = ['position' => \yii\web\View::POS_HEAD];
}
