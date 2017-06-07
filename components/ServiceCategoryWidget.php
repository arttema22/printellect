<?php

namespace app\components;

use yii\base\Widget;
use app\models\ServiceCategory;
use Yii;

/**
 * @author arttema
 */
class ServiceCategoryWidget extends Widget {

    public $tpl;
    public $model;
    public $data;
    public $tree;
    public $menuHtml;
    
    public $items;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'menu';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        // get cache
        if ($this->tpl == 'menu.php') {
            $menu = Yii::$app->cache->get('menu');
            if ($menu)
                return $menu;
        }

        $this->data = ServiceCategory::find()->where(['active' => '1'])->indexBy('id')->asArray()->all();
        $this->tree = $this->getTree();
        
        $this->items = '';
        $this->items .= ['label' => 'Оборудование', 'url' => ['/category/view', 'id' => 19], 'params' => ['id' => 19]];
        return $this->items;        
        
        $this->menuHtml = '<li><a href="/">Главная</a></li>';
        $this->menuHtml .= $this->getMenuHtml($this->tree);
        $this->menuHtml .= "<li><a href='/photoservice/index'>Фотоуслуги</a></li>";
//        $this->menuHtml .= '<li><a href="/calc/index">Цены</a></li>';
        $this->menuHtml .= '<li><a href="#">Лазерная резка</a></li>';
        // set cache
        if ($this->tpl == 'menu.php') {
//            Yii::$app->cache->set('menu', $this->menuHtml, 60);
        }
        return $this->menuHtml;
    }

    protected function getTree() {
        $tree = [];
        foreach ($this->data as $id => &$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($tree, $tab = '') {
        $str = '';
        foreach ($tree as $category) {
            $str .= $this->catToTemplate($category, $tab);
        }
        return $str;
    }

    protected function catToTemplate($category, $tab) {
        ob_start();
        include __DIR__ . '/service_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}
