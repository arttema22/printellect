<?php

namespace app\components;

use yii\base\Widget;
use app\models\Category;
use Yii;

/**
 * @author arttema
 */
class PhotoBookParallaxWidget extends Widget {

    public function run() {
        return $this->render('photobookparallax');
    }
}
