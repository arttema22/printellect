<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\Product;
use app\models\Service;
use yii\web\HttpException;

class ServiceController extends AppController {

    public function actionView($id) {

        $product = Service::findOne($id);

        // error
        if (empty($product))
            throw new HttpException(404, 'Такого товара нет');

        //set metatags
        $this->setMetatag($product->name, $product->keywords, $product->description);

        return $this->render('view', compact('product'));
    }

}
