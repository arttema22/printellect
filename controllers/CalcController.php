<?php

namespace app\controllers;

use app\controllers\AppController;
use app\models\CalcBcard;
use app\models\CalcBcardPp;
use app\models\CalcFlysheet;
use app\models\CalcFlysheetPp;
use app\models\CalcSilkscreen;
use app\models\CalcSilkscreenPp;
use app\models\CalcPlasticCard;
use app\models\CalcPlasticCardpp;
use app\models\CalcLargePrinting;
use app\models\CalcSsPrinting;
use app\models\CalcOrderForm;
use Yii;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\web\UploadedFile;

class CalcController extends AppController {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionBcard() {

        $model = new CalcOrderForm();

        $bcard = CalcBcard::find()->asArray()->all();
        $bcard_pp = CalcBcardPp::find()->asArray()->orderBy('id')->all();

        Yii::$app->view->registerJs("var bcard = " . Json::encode($bcard) . "; var bcard_pp = " . Json::encode($bcard_pp) . ";", \yii\web\View::POS_HEAD);

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {

            $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            $model->uploadmaket();

            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('bcard', compact('bcard', 'bcard_pp', 'model'));
    }

    public function actionFlysheet() {

        $model = new CalcOrderForm();

        $flysheet = CalcFlysheet::find()->asArray()->orderBy('id')->all();

        //$categories = ArrayHelper::map($flysheet, 'id', function($item) { return $item; }, 'density');
//$test = [];        
//foreach ($flysheet as $fsheet){
////    debug($fsheet);
//   $test[$fsheet['density']] = array_merge($fsheet);
//    
//}

        $flysheet_pp = CalcFlysheetPp::find()->asArray()->orderBy('id')->all();

        Yii::$app->view->registerJs("var flysheet = " . Json::encode($flysheet) . "; var flysheet_pp = " . Json::encode($flysheet_pp) . ";", \yii\web\View::POS_HEAD);

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
//debug($flysheet);
        return $this->render('flysheet', compact('flysheet', 'flysheet_pp', 'model'));
    }

    public function actionSilkscreen() {

        $model = new CalcOrderForm();

        $silkscreen = CalcSilkscreen::find()->asArray()->all();
        $silkscreen_pp = CalcSilkscreenPp::find()->asArray()->orderBy('id')->all();

        Yii::$app->view->registerJs("var silkscreen = " . Json::encode($silkscreen) . "; var silkscreen_pp = " . Json::encode($silkscreen_pp) . ";", \yii\web\View::POS_HEAD);

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('silkscreen', compact('silkscreen', 'silkscreen_pp', 'model'));
    }

    public function actionPlasticCard() {

        $model = new CalcOrderForm();

        $plasticcard = CalcPlasticCard::find()->asArray()->all();
        $plasticcard_pp = CalcPlasticCardpp::find()->asArray()->orderBy('id')->all();

        Yii::$app->view->registerJs("var plasticcard = " . Json::encode($plasticcard) . "; var plasticcard_pp = " . Json::encode($plasticcard_pp), ";", \yii\web\View::POS_HEAD);

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('plastic-card', compact('plasticcard', 'plasticcard_pp', 'model'));
    }

    public function actionLargePrinting() {

        $model = new CalcOrderForm();

        $lprinting = CalcLargePrinting::find()->asArray()->all();

        Yii::$app->view->registerJs("var lprinting = " . Json::encode($lprinting) . "; ", \yii\web\View::POS_HEAD);

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('large-printing', compact('lprinting', 'model'));
    }

    public function actionSsPrinting() {

        $model = new CalcOrderForm();

        $ssprinting = CalcSsPrinting::find()->asArray()->all();

        Yii::$app->view->registerJs("var ssprinting = " . Json::encode($ssprinting) . "; ", \yii\web\View::POS_HEAD);

        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('ss-printing', compact('ssprinting', 'model'));
    }
    
}
