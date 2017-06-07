<?php

use yii\helpers\Html;
use app\components\SliderProductWidget;
use app\components\SaleNvtrdWidget;
?>

<div class="service-item">
    <div class="block-7">
        <div class="row">
            <div class="col-lg-4">
                <div class="img_left">
                    <?php $img = $product->getImage(); ?> 
                    <?= Html::img($img->getUrl(), ['alt' => $product->name, 'class' => 'img-responsive']); ?>
                    <?php if ($product->serviceCategory->id == 19) : ?>
                        <a href="<?= $product->url ?>" target="_blank" class=" btn btn-item btn-block">Подробнее</a>
                    <?php else : ?>
                        <span class="btn btn-item btn-block">&nbsp;</span>
                    <?php endif; ?>                
                </div>
            </div>
            <div class="col-lg-8">
                <h1><?= $product->name ?></h1>
                <?= $product->content ?>
            </div>
        </div>
    </div>
</div>

<div class="hidden-sm hidden-xs">
    <?= SliderProductWidget::widget(['id' => $product->id]); ?>
</div>

<?php if ($product->serviceCategory->id == 19) : ?>
    <?= SaleNvtrdWidget::widget() ?>
<?php endif; ?>


