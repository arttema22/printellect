<?php

use yii\helpers\Url;
use yii\helpers\Html;
?>

<div class="clearfix">
    <h1>Вам может быть интересно</h1>
</div>
<div class="main">
    <div id="mi-slider" class="mi-slider">
        <ul>
            <?php foreach ($equipment as $item): ?>
                <li>
                    <a href="<?= Url::to(['service/view', 'id' => $item->id]) ?>">
                        <?php $img = $item->getImage(); ?> 
                        <?= Html::img($img->getUrl(), ['alt' => $item->name, 'class' => 'img-circle img-responsive']); ?> 
                        <h4><?= $item->name ?></h4>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <ul>
            <?php foreach ($polygraphy as $item): ?>
                <li>
                    <a href="<?= Url::to(['service/view', 'id' => $item->id]) ?>">
                        <?php $img = $item->getImage(); ?> 
                        <?= Html::img($img->getUrl(), ['alt' => $item->name, 'class' => 'img-circle img-responsive']); ?> 
                        <h4><?= $item->name ?></h4>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <ul>
            <?php foreach ($equipment as $item): ?>
                <li>
                    <a href="<?= Url::to(['service/view', 'id' => $item->id]) ?>">
                        <?php $img = $item->getImage(); ?> 
                        <?= Html::img($img->getUrl(), ['alt' => $item->name, 'class' => 'img-circle img-responsive']); ?> 
                        <h4><?= $item->name ?></h4>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <ul>
            <?php foreach ($polygraphy as $item): ?>
                <li>
                    <a href="<?= Url::to(['service/view', 'id' => $item->id]) ?>">
                        <?php $img = $item->getImage(); ?> 
                        <?= Html::img($img->getUrl(), ['alt' => $item->name, 'class' => 'img-circle img-responsive']); ?> 
                        <h4><?= $item->name ?></h4>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
        <nav>
            <a href="#">Оборудование</a>
            <a href="#">Полиграфия</a>

        </nav>
    </div>
</div>
