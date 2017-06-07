<?php
/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Реквизиты';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <h1><?= $this->title ?></h1>

    <h2><?= Yii::$app->params['companyName'] ?></h2>	

    <dl class="dl-horizontal">
        <dt>ИНН:</dt>
        <dd>7840050553</dd>
        <dt>КПП:</dt>
        <dd>784001001</dd>
        <dt>ОГРН:</dt>
        <dd>1167847200278</dd>
        <dt>ОКПО:</dt>
        <dd>02214099</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Расчетный счет:</dt>
        <dd>40702810206000017214</dd>
        <dt>Банк:</dt>
        <dd>СТ-ПЕТЕРБУРГСКИЙ Ф-Л ПАО "ПРОМСВЯЗЬБАНК"</dd>
        <dt>БИК:</dt>
        <dd>044030920</dd>
        <dt>Корр. счет:</dt>
        <dd>30101810000000000000</dd>
    </dl>
    <dl class="dl-horizontal">
        <dt>Юридический адрес:</dt>
        <dd><?= Yii::$app->params['companyAddress'] ?></dd>
        <dt>телефон:</dt>
        <dd><?= Yii::$app->params['phone'] ?></dd>
        <dt>Управляющий:</dt>
        <dd>Окунев Андрей Владимирович</dd>
    </dl>

</div>