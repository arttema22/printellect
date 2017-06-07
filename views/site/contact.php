<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="service-item">
    <div class="block-7">
        <div class="row">
            <div class="col-sm-4 col-xs-12">
                <div class="img_left">
                    <p>Tел. <?= Yii::$app->params['phone'] ?></p> 
                    <p>Email: <?= Yii::$app->params['companyEmail'] ?></p>
                    <p><?= Yii::$app->params['companyName'] ?></p>
                    <p><?= Yii::$app->params['companyAddress'] ?></p>
                    <span class="btn btn-item btn-block">&nbsp;</span>

                </div>
            </div>
            <div class="col-sm-8 col-xs-12">
                <div class="ya_map">
                    <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A1c723124dacf97a47862437034c8fa71793890504100de08798d6c5d682640c0&amp;width=100%25&amp;height=686&amp;lang=ru_RU&amp;scroll=true"></script>
                </div>
            </div>
        </div>
    </div>
</div>
