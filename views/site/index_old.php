<?php
/* @var $this yii\web\View */

use app\components\CatalogWidget;
use app\components\ServiceCategoryWidget;
use app\components\CatshowWidget;
use app\components\PhotoBookParallaxWidget;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Html;
use app\models\ServiceCategory;

$this->title = 'Printellect';

\pavlinter\wow\WowAsset::register($this)->wow([
    'boxClass' => 'wow',
    'animateClass' => 'animated',
    'offset' => '0',
]);

?>

<div class="visible-xs">  
    <div class="block-fs block-fp">
        <div class="fp_cart">
            <a href="#" id="login"><span>Войти</span></a>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>   
        </div>
        <?php
//        NavBar::begin([
//            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
//            'brandUrl' => Yii::$app->homeUrl,
//            'options' => [
//                'class' => 'navbar-inverse navbar-static-top',
//            ],
//        ]);
//        echo Nav::widget([
//            'options' => ['class' => 'navbar-nav navbar-right nav-ul '],
//            'items' => [
//                ServiceCategoryWidget::widget(),
//            ],
//        ]);
//        NavBar::end();
        ?>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right nav-ul'],
            'activateItems' => 'true',
            'activateParents' => 'true',
            'items' => ServiceCategory::getMenuItems(),
        ]);
        NavBar::end();
        ?>
    </div>
</div>

<div class="block-fs block-fp">
    <div id="polygraphy" role="img" aria-label="Полиграфия">
        <a href="/category/2">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                оперативная</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Полиграфия</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                это быстрота, надежность и качество</h3>
        </a>
        <span class="inner"></span>
    </div>
    <div class="hidden-xs">  
        <div class="fp_cart">
            <a href="#" id="login"><span>Войти</span></a>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>   
        </div>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right nav-ul'],
            'activateItems' => 'true',
            'activateParents' => 'true',
            'items' => ServiceCategory::getMenuItems(),
        ]);
        NavBar::end();
        ?>
    </div>
</div>

<div class="block-fs block-fp">
    <div id="equipment" role="img" aria-label="Оборудование">
        <a href="/category/19">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                полиграфическое</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                оборудование</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                от Printellect</h3>
        </a>
        <span class="inner"></span>
    </div>
    <div class="hidden-xs">  
        <div class="fp_cart">
            <a href="#" id="login"><span>Войти</span></a>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>   
        </div>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right nav-ul'],
            'activateItems' => 'true',
            'activateParents' => 'true',
            'items' => ServiceCategory::getMenuItems(),
        ]);
        NavBar::end();
        ?>
    </div>
</div>

<div class="block-fs block-fp">
    <div id="photoservice" role="img" aria-label="Полиграфия">
        <a href="/photoservice/index">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                сканирование пленок</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Фотоуслуги</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                фотоальбомы</h3>
        </a>
        <span class="inner"></span>
    </div>
    <div class="hidden-xs">  
        <div class="fp_cart">
            <a href="#" id="login"><span>Войти</span></a>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>   
        </div>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right nav-ul'],
            'activateItems' => 'true',
            'activateParents' => 'true',
            'items' => ServiceCategory::getMenuItems(),
        ]);
        NavBar::end();
        ?>
    </div>
</div>

<div class="block-fs block-fp">
    <div id="laser" role="img" aria-label="Полиграфия">
        <a href="#">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                Быстро и недорого</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Лазерная резка</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                акрил, фанера, силикон, фторопласт</h3>
        </a>
        <span class="inner"></span>
    </div>
    <div class="hidden-xs">  
        <div class="fp_cart">
            <a href="#" id="login"><span>Войти</span></a>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>   
        </div>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right nav-ul'],
            'activateItems' => 'true',
            'activateParents' => 'true',
            'items' => ServiceCategory::getMenuItems(),
        ]);
        NavBar::end();
        ?>
    </div>
</div>

<!--<div class="block-fs block-fp">
    <div id="shop" role="img" aria-label="Полиграфия">
        <a href="#">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                магазин</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Мир бумаги</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                это широкий ассортимент,<br> лучшая цена и качество</h3>
        </a>
        <span class="inner"></span>
    </div>
    <div class="hidden-xs">  
        <div class="fp_cart">
            <a href="#" id="login"><span>Войти</span></a>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>   
        </div>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right nav-ul'],
            'activateItems' => 'true',
            'activateParents' => 'true',
            'items' => ServiceCategory::getMenuItems(),
        ]);
        NavBar::end();
        ?>
    </div>
</div>-->

<!--<div class="block-fs block-fp">
    <div id="consumables" role="img" aria-label="Полиграфия">
        <a href="#">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                расходные</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Материалы</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                это широкий ассортимент и качество</h3>
        </a>
        <span class="inner"></span>
    </div>
    <div class="hidden-xs">  
        <div class="fp_cart">
            <a href="#" id="login"><span>Войти</span></a>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>   
        </div>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right nav-ul'],
            'activateItems' => 'true',
            'activateParents' => 'true',
            'items' => ServiceCategory::getMenuItems(),
        ]);
        NavBar::end();
        ?>
    </div>
</div>-->

<!--<div class="block-fs block-fp">
    <div id="stationery" role="img" aria-label="Полиграфия">
        <a href="#">
            <h2 class="slideTitle wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                офисная</h2>
            <h1 class="slideTitle wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                Канцелярия</h1>
            <h3 class="slideTitle wow fadeIn animated" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                это широкий ассортимент,<br> лучшая цена и качество</h3>
        </a>
        <span class="inner"></span>
    </div>
    <div class="hidden-xs">  
        <div class="fp_cart">
            <a href="#" id="login"><span>Войти</span></a>
            <a href="#"><span class="glyphicon glyphicon-search"></span></a>
            <a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></a>   
        </div>
        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right nav-ul'],
            'activateItems' => 'true',
            'activateParents' => 'true',
            'items' => ServiceCategory::getMenuItems(),
        ]);
        NavBar::end();
        ?>
    </div>
</div>-->

<!--Секция: Меню-->
<!--<div class="block-menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                    <div class="gray-square">
                        <img src="images/menu1.png" alt="photo">
                        <h3>ПОЛИГРАФИЯ</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                    <div class="gray-square">
                        <img src="images/menu1.png" alt="photo">
                        <h3>РАСХОДНЫЕ МАТЕРИАЛЫ</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                    <div class="gray-square">
                        <img src="images/menu1.png" alt="photo">
                        <h3>БУМАГА</h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                    <div class="gray-square">
                        <img src="images/menu1.png" alt="photo">
                        <h3>КАНЦТОВАРЫ</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<!--Секция: Полиграфия-->
<!--<div class="polygraphy parallax-window" data-parallax="scroll" data-image-src="images/bg_polygraph.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Полиграфия</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/menu1.png" alt="photo" class="img-responsive">
                        <h2>Флаеры</h2>
                    </div>
                    <a href="#">Узнать больше</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/item_vizitki.png" alt="photo" class="img-responsive">
                        <h2>Визитки</h2>
                    </div>
                    <a href="#">Узнать больше</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeIn animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/item_stikers.png" alt="photo" class="img-responsive">
                        <h2>Стикеры</h2>
                    </div>
                    <a href="#">Узнать больше</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/item_invite.png" alt="photo" class="img-responsive">
                        <h2>Приглашения</h2>
                    </div>
                    <a href="#">Узнать больше</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeIn animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/item_convert.png" alt="photo" class="img-responsive">
                        <h2>Конверты</h2>
                    </div>
                    <a href="#">Узнать больше</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeIn animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/item_vizitki.png" alt="photo" class="img-responsive">
                        <h2>Визитки</h2>
                    </div>
                    <a href="#">Узнать больше</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeIn animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/item_stikers.png" alt="photo" class="img-responsive">
                        <h2>Стикеры</h2>
                    </div>
                    <a href="#">Узнать больше</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 wow fadeIn animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/item_calendar.png" alt="photo" class="img-responsive">
                        <h2>Календари</h2>
                    </div>
                    <a href="#">Узнать больше</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="btn btn-default">Перейти в раздел</a>
            </div>
        </div>

    </div>
</div>-->

<!--Секция: Канцелярские товары-->
<!--<div class="stationery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Канцелярские товары</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <img src="images/item_colortext.png" alt="photo" class="img-responsive">
                    <a>ПОЛИГРАФИЯ</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <img src="images/item_note.png" alt="photo" class="img-responsive">
                    <a>РАСХОДНЫЕ МАТЕРИАЛЫ</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <img src="images/item_canc1.png" alt="photo" class="img-responsive">
                    <a>БУМАГА</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <img src="images/item_pen.png" alt="photo" class="img-responsive">
                    <a>КАНЦТОВАРЫ</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="btn btn-default">Перейти в раздел</a>
            </div>
        </div>
    </div>
</div>-->

<!--Секция: Оборудование-->
<!--<div class="equipment parallax-window" data-parallax="scroll" data-image-src="images/bg_polygraph.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Оборудование</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/tech_convert.png" alt="photo">
                        <a>Оборудование 1</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/tech_material.png" alt="photo">
                        <a>Оборудование 2</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/tech_stikers.png" alt="photo">
                        <a>Оборудование 3</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <div class="thumbnail">
                        <img src="images/tech_convert.png" alt="photo">
                        <a>Оборудование 4</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="btn btn-default">Перейти в раздел</a>
            </div>
        </div>
    </div>
</div>-->

<!--Секция: Расходные материалы-->
<!--<div class="stationery">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1>Расходные материалы</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <img src="images/item_colortext.png" alt="photo" class="img-responsive">
                    <a>ПОЛИГРАФИЯ</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <img src="images/item_note.png" alt="photo" class="img-responsive">
                    <a>РАСХОДНЫЕ МАТЕРИАЛЫ</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <img src="images/item_canc1.png" alt="photo" class="img-responsive">
                    <a>БУМАГА</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="thumb-pad-3">
                    <img src="images/item_pen.png" alt="photo" class="img-responsive">
                    <a>КАНЦТОВАРЫ</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <a href="#" class="btn btn-default">Перейти в раздел</a>
            </div>
        </div>
    </div>
</div>-->

<!--<div id="content">
    <div class="full-width-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 bg-1 fw col-sm-4">
                    <div class="block-1 left-side oneHeight">
                        <div class="wow fadeInLeft" data-wow-delay="0.3s">
                            <h3>Быстрый <br><span>заказ</span></h3>
                            <div class="thumb-pad-1">
                                <div class="thumbnail">
                                    <img src="images/page1-img1.jpg" alt="photo">
                                    <div class="caption">
                                        <p>Всего 5 минут Вам понадобится для подбора фотографий, выбора оформления фотокниги и заказа</p>
                                        <a class="btn-default btn btn-1" href="http://printellect.fotis.su/" target="_blank">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 bg-1 fw col-md-4 col-sm-4">
                    <div class="block-1 left-side oneHeight">
                        <div class="wow fadeInLeft" data-wow-delay="0.3s">
                            <h3>Быстрое <br><span>исполнение</span></h3>
                            <div class="thumb-pad-1">
                                <div class="thumbnail">
                                    <img src="images/page1-img2.jpg" alt="photo">
                                    <div class="caption">
                                        <p>Всего 5 дней и у Вас в руках полностью исполненный заказ независимо от тиража и сложности</p>
                                        <a class="btn-default btn btn-1" href="http://printellect.fotis.su/" target="_blank">Перейти</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="block-1 bg-2 fw right-side oneHeight">     
                        <div class="wow fadeInRight" data-wow-delay="0.3s">
                            <div class="box-1">
                                <h3>Создай <br>свою <br>Фотокнигу</h3>
                                <p>Закажите продукцию из дома через интернет и приходите в фотоцентр уже за готовым заказом. Фотокнигу можно заказать с помощью нашего удобного и быстрого онлайн-редактора фотокниг.</p>
                                <a class="btn-default btn btn-1" href="http://printellect.fotis.su/" target="_blank">Перейти</a>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div> 
    </div>
    <div class="full-width-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 oneHeight">
                    <div class="block-1 left-side">
                        <div class="box-2 wow fadeInLeft" data-wow-delay="0.3s">
                            <span class="badge">01</span>
                            <h3>Вы <br></h3> 
                            <h5>выбираете </h5>
                            <p>высококачественную печать с насыщенной цветопередачей</p>
                            <h5>заказываете </h5>
                            <p>фотокнигу любой тематики</p>      
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 oneHeight">
                    <div class="block-1 left-side">
                        <div class="box-2 wow fadeInLeft" data-wow-delay="0.3s">
                            <span class="badge">02</span>
                            <h3>Мы<br></h3> 
                            <h5>делаем </h5>
                            <p>фотокнигу по Вашему индивидуальному проекту</p>
                            <h5>доставляем</h5>
                            <p>заказ в удобное для Вас время</p>          
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 oneHeight">
                    <div class="block-2 bg-3 fw right-side">      
                        <div class="box-3 wow fadeInRight" data-wow-delay="0.3s">   
                            <h3>Фотокнига <br>приятный <br>сюрприз </h3>
                            <p>Соберите все памятные моменты воедино, начиная с черно-белых фотографий родителей и заканчивая вчерашними фото со смартфона, — восторг от таких фотоархивов не имеет границ! Дарите радость близким!</p>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>

    <div class="block-1 bg-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                    <h3>Наши <span>работы</span></h3>
                </div>
            </div>
        </div>
        <div class="owl-carousel">
            <div class="thumb-pad-2 bg-1 wow fadeIn" data-wow-delay="0.4s">
                <div class="thumbnail">
                    <img src="images/page1-img1.jpg" alt="photo">
                    <div class="caption">
                        <h5><a class="link link-1" href="#">название</a></h5>
                        <p>Краткое описание</p>
                    </div>
                </div>
            </div>
            <div class="thumb-pad-2 bg-1 wow fadeIn" data-wow-delay="0.5s">
                <div class="thumbnail">
                    <img src="images/page1-img2.jpg" alt="photo">
                    <div class="caption">
                        <h5><a class="link link-1" href="#">название</a></h5>
                        <p>Краткое описание</p>
                    </div>
                </div>
            </div>
            <div class="thumb-pad-2 bg-1 wow fadeIn" data-wow-delay="0.6s">
                <div class="thumbnail">
                    <img src="images/page1-img3.jpg" alt="photo">
                    <div class="caption">
                        <h5><a class="link link-1" href="#">название</a></h5>
                        <p>Краткое описание</p>
                    </div>
                </div>
            </div>
            <div class="thumb-pad-2 bg-1 wow fadeIn" data-wow-delay="0.7s">
                <div class="thumbnail">
                    <img src="images/page1-img4.jpg" alt="photo">
                    <div class="caption">
                        <h5><a class="link link-1" href="#">название</a></h5>
                        <p>Краткое описание</p>
                    </div>
                </div>
            </div>
            <div class="thumb-pad-2 bg-1 wow fadeIn" data-wow-delay="0.8s">
                <div class="thumbnail">
                    <img src="images/page1-img5.jpg" alt="photo">
                    <div class="caption ">
                        <h5><a class="link link-1" href="#">название</a></h5>
                        <p>Краткое описание</p>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>-->
