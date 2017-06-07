<?php

namespace app\components;

use yii\base\Widget;
use app\models\Service;

class InteresWidget extends Widget {

    public $cat_id;
    public $tpl;

    public function init() {
        parent::init();
        if ($this->cat_id === null) {
            $this->cat_id = 19;
        }
        if ($this->tpl === null) {
            $this->tpl = 'default';
        }
        $this->tpl .= '.php';
    }

    public function getViewPath() {
        return(__DIR__ . '/interes_tpl');
    }

    public function run() {

        $service = Service::find()->where(['category_id' => $this->cat_id])->all();

        // error
        if (empty($service))
            return;

        return $this->render($this->tpl, compact('service'));
    }

}
