<?php
/* @var $this yii\web\View */

use app\components\CatalogWidget;
use app\components\CatshowWidget;
?>

<?= CatshowWidget::widget(['cat_id' => $category->id, 'variant' => 1]) ?>

<?= CatshowWidget::widget(['cat_id' => $category->id, 'variant' => 2]) ?>
