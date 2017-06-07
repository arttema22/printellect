<?php

namespace app\components;

use yii\base\Widget;
use app\models\Service;

class SliderProductWidget extends Widget {

    public $tpl;
    public $id;

    public function init() {
        parent::init();

        if ($this->tpl === null) {
            $this->tpl = 'default';
        }
        $this->tpl .= '.php';
    }

    public function getViewPath() {
        return(__DIR__ . '/sliderproduct_tpl');
    }

    public function run() {

        $equipment = Service::find()->where('category_id=19 AND id<>'.$this->id)->limit(5)->all();

        $polygraphy = Service::find()->where(['category_id' => 2])->limit(4)->all();

        return $this->render($this->tpl, compact('equipment', 'polygraphy'));
    }

}
