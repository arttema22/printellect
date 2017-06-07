<?php

namespace app\components;

use yii\base\Widget;
use app\modules\admin\models\ServiceCategory;
use Yii;

class MenuWidget extends Widget {

    public $tpl;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'menu_vertical';
        }
        $this->tpl .= '.php';
    }

    public function getViewPath() {
        return(__DIR__ . '/menu_tpl');
    }

    public function run() {
        // get cache
//        if ($this->tpl == 'menu.php') {
//            $menu = Yii::$app->cache->get('menu');
//            if ($menu)
//                return $menu;
//        }

        $menu = ServiceCategory::find()->indexBy('id')->where(['parent_id' => '0', 'active' => '1'])->asArray()->all();
        // error
        if (empty($menu))
            return;

        // set cache
//        if ($this->tpl == 'menu.php') {
//            Yii::$app->cache->set('menu', $this->menuHtml, 60);
//        }

        return $this->render($this->tpl, compact('menu'));
    }

}

//where(['category_id' => $id, 'active' => '1'])