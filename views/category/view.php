<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\LinkPager;
use yii\widgets\Pjax;
?>

<!-- Секция: Оборудование -->
<?php if ($category->id == 19) : ?>
    <?php if (!empty($products)): ?>
        <div class="block-3 type2">
            <div class="row">
                <?php $i = 2 ?>
                <?php foreach ($products as $product): ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="item wow fadeIn animated" data-wow-delay="0.<?= $i ?>s" style="visibility: visible; animation-delay: 0.<?= $i ?>s; animation-name: fadeIn;">
                            <a href="<?= Url::to(['service/view', 'id' => $product->id]) ?>">
                                <?php $img = $product->getImage(); ?> 
                                <?= Html::img($img->getUrl(), ['alt' => $product->name, 'class' => 'img-responsive']); ?> 
                                <h2><?= $product->name ?></h2>
                                <p>Узнать больше</p>
                            </a>
                        </div>
                    </div>
                    <?php $i++ ?>
                <?php endforeach; ?>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<!--Секция: Полиграфия-->
<?php if ($category->id !== 19) : ?>
    <?php if (!empty($products)): ?>
        <div class="polygraphy-block">
            <?php Pjax::begin(); ?>
            <div class="row">
                <div class="poly-data">
                    <?php $i = 2 ?>
                    <?php foreach ($products as $product): ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 wow fadeIn animated" data-wow-delay="0.<?= $i ?>s" style="visibility: visible; animation-delay: 0.<?= $i ?>s; animation-name: fadeIn;">
                            <a href="<?= Url::to(['service/view', 'id' => $product->id]) ?>">
                                <div class="thumb-pad-3">
                                    <div class="thumbnail">
                                        <?php $img = $product->getImage(); ?> 
                                        <?= Html::img($img->getUrl(), ['alt' => $product->name, 'class' => 'img-circle img-responsive']); ?> 
                                        <h2><?= $product->name ?></h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="clearfix"></div>
            <?php if ($pages->totalCount <= 8) { ?>
                <div style="margin:40px">&nbsp;</div>
                <?php
            } else {
                echo LinkPager::widget(['pagination' => $pages, 'firstPageLabel' => 'Назад', 'nextPageLabel' => 'Далее']);
            }
            ?>

            <?php Pjax::end(); ?>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if ($category->id !== 19) : ?>
    <?php if (!empty($product_see)): ?>
        <div class="see">
            <div class="block-4">
                <h1>Вы недавно смотрели</h1>
                <div class="row">
                    <?php $i = 3 ?>
                    <?php foreach ($product_see as $product): ?>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn animated" data-wow-delay="0.<?= $i ?>s" style="visibility: visible; animation-delay: 0.<?= $i ?>s; animation-name: fadeIn;">
                            <a href="<?= Url::to(['service/view', 'id' => $product->id]) ?>">
                                <div class="item">
                                    <?php $img = $product->getImage(); ?> 
                                    <?= Html::img($img->getUrl(), ['alt' => $product->name, 'class' => 'img-circle img-responsive']); ?> 
                                    <h2><?= $product->name ?></h2>
                                </div>
                            </a>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<div class="hidden-sm hidden-xs">
    <?php if ($category->id !== 19) : ?>
        <?php if (!empty($product_see)): ?>
            <div class="interes">
                <div class="block-4">
                    <div class="row">
                        <h1 class="col-xs-12">Вам может быть интересно</h1>
                        <?php foreach ($product_see as $product): ?>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                <div class="item">
                                    <?php $img = $product->getImage(); ?> 
                                    <?= Html::img($img->getUrl(), ['alt' => $product->name, 'class' => 'img-circle img-responsive']); ?> 
                                    <h2><?= $product->name ?></h2>
                                    <a href="<?= Url::to(['service/view', 'id' => $product->id]) ?>">Узнать больше</a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>
</div>