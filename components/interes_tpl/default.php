<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="container">
    <div class="interes">
        <div class="row">
            <h1 class="col-xs-12">Вам может быть интересно</h1>
            <?php foreach ($service as $item): ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="item">
                        <?php $img = $item->getImage(); ?> 
                        <?= Html::img($img->getUrl(), ['alt' => $item->name, 'class' => 'img-circle img-responsive']); ?> 
                        <h2><?= $item->name ?></h2>
                        <a href="<?= Url::to(['service/view', 'id' => $item->id]) ?>">Узнать больше</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
