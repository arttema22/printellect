<?php

namespace app\components;

use yii\base\Widget;
use app\models\Slider;

class SliderWidget extends Widget {

    public $name;
    public $tpl;

    public function init() {
        parent::init();
        if ($this->name === null) {
            $this->name = 'frontpage';
        }
        if ($this->tpl === null) {
            $this->tpl = 'default';
        }
        $this->tpl .= '.php';
    }

    public function getViewPath() {
        return(__DIR__ . '/slider_tpl');
    }

    public function run() {

        $slider = Slider::find()->where(['active' => '1', 'name' => $this->name])->asArray()->all();
        // error
        if (empty($slider))
            return;

        return $this->render($this->tpl, compact('slider'));
    }

}
