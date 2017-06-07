<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use app\models\ServiceCategory;
use yii\bootstrap\Modal;
use app\components\MenuWidget;

$this->title = 'Printellect';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="visible-xs">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'innerContainerOptions' => ['class' => 'container-fluid'],
        'options' => ['class' => 'navbar-inverse navbar-fixed-top'],
    ]);
    echo MenuWidget::widget(['tpl' => 'menu_horizontal']);
    NavBar::end();
    ?>
</div>

<div class="hidden-xs">
    <?php
    NavBar::begin([
        'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
        'brandUrl' => Yii::$app->homeUrl,
        'innerContainerOptions' => ['class' => 'container-fluid'],
        'options' => ['class' => 'navbar-inverse navbar-fixed-bottom'],
    ]);
    echo MenuWidget::widget(['tpl' => 'menu_horizontal']);
    NavBar::end();
    ?>

</div>

<section class="panel polygraphy" data-section-name="polygraphy">
    <div class="inner">
        <a href="/category/2">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                оперативная</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Полиграфия</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                это быстрота, надежность и качество</h3>
        </a>
    </div>
</section>

<section class="panel equipment" data-section-name="equipment">
    <div class="inner">
        <a href="/category/19">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                полиграфическое</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                оборудование</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                от Printellect</h3>
        </a>
    </div>
</section>

<section class="panel photoservice" data-section-name="photoservice">
    <div class="inner">
        <a href="/photoservice/index">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                сканирование пленок</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Фотоуслуги</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                фотоальбомы</h3>
        </a>
    </div>
</section>

<section class="panel laser" data-section-name="laser">
    <div class="inner">
        <a href="/category/20">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                Быстро и недорого</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Лазерная резка</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                акрил, фанера, силикон, фторопласт</h3>
        </a>
    </div>
</section>

<!--<footer>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>&copy; 2017 Printellect. Все права защищены.</p>
                    <p><?php //= Yii::$app->params['companyName']              ?> <?php //= Yii::$app->params['companyAddress']              ?></p>
                    <p>Tел.: <a href="callto:<?php //= Yii::$app->params['phone']              ?>"><?php //= Yii::$app->params['phone']              ?></a> e-mail: <a href="mailto:<?php //= Yii::$app->params['companyEmail']              ?>"><?php //= Yii::$app->params['companyEmail']              ?></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>-->