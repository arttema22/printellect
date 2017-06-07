<?php

namespace app\controllers;

use Yii;
use app\controllers\AppController;
use app\models\ServiceCategory;
use app\models\Service;
use yii\web\HttpException;
use yii\data\Pagination;

class CategoryController extends AppController {

    public function actionView($id) {

        $category = ServiceCategory::findOne($id);

        $col = $category['col']; // количество столбцов
        // error
        if (empty($category))
            throw new HttpException(404, 'Такой категории нет');

        //set metatags
        $this->setMetatag($category->name, $category->keywords, $category->description);

//        $products = Product::find()->where(['category_id' => $id])->all();
        $query = Service::find()->where(['category_id' => $id, 'active' => '1']);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 8,
            'forcePageParam' => false, 'pageSizeParam' => false]);
        $products = $query->offset($pages->offset)->limit($pages->limit)->all();
        $product_see = $query->limit(3)->all();
        return $this->render('view', compact('products', 'product_see', 'pages', 'col', 'category'));
    }

    public function actionShow($id) {

        $category = Category::findOne($id);

        // error
        if (empty($category))
            throw new HttpException(404, 'Такого раздела нет');

        //set metatags
        $this->setMetatag($category->name, $category->keywords, $category->description);

        return $this->render('show', compact('category'));
    }

    public function actionSearch() {

        $q = trim(Yii::$app->request->get('q'));

        //set metatags
        $this->setMetatag('Поиск: ', $q);

        if (!$q)
            return $this->render('search', compact('q'));

        $query = Service::find()->where(['like', 'name', $q]);
        $pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => 3, 'forcePageParam' => false, 'pageSizeParam' => false]);
        $services = $query->offset($pages->offset)->limit($pages->limit)->all();

        return $this->render('search', compact('services', 'pages', 'q'));
    }

}
