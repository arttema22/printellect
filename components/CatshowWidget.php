<?php

namespace app\components;

use yii\base\Widget;
use app\models\Category;

/**
 * @author arttema
 */
class CatshowWidget extends Widget {

    public $cat_id;
    public $variant;

    public function run() {

        $category = Category::findOne($this->cat_id);
        // error
        if (empty($category))
            return;

        $show = Category::find()->where(['parent_id' => $this->cat_id])->asArray()->all();
        // error
        if (empty($show))
            return;

        return $this->render('catshow_'.$this->variant, compact('category', 'show'));
    }

}
