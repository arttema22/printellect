<?php

use yii\helpers\Html;
use yii\helpers\Url;
?>

<div class="block-7">
    <h2>Вы искали: <?= Html::encode($q) ?></h2>
    <?php if (!empty($services)): ?>
        <div class="row">
            <?php foreach ($services as $product): ?>
                <div class="col-md-12">
                    <h2>
                        <a href="<?= Url::to(['service/view', 'id' => $product->id]) ?>"><?= $product->name ?></a>
                    </h2>
                </div>
                <div class="col-md-12">
                    <p>
                        <a href="<?= Url::to(['service/view', 'id' => $product->id]) ?>">
                            <?= substr($product->content, 0, strpos($product->content, ' ', 360)) . '...'; ?>
                        </a>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <div class="alert alert-info">Поиск не дал результатов</div>
    <?php endif; ?>
</div>