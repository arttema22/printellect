<?php

namespace app\components;

use yii\base\Widget;

class SaleNvtrdWidget extends Widget {

    public $tpl;

    public function init() {
        parent::init();

        if ($this->tpl === null) {
            $this->tpl = 'default';
        }
        $this->tpl .= '.php';
    }

    public function getViewPath() {
        return(__DIR__ . '/salenvtrd_tpl');
    }

    public function run() {
        return $this->render($this->tpl);
    }

}
