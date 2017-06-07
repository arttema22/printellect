<?php

namespace app\assets;

use yii\web\AssetBundle;

class AppbottomAsset extends AssetBundle {

    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $js = [
        //'//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'js/tm-scripts.js',
    ];
}
