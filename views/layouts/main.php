<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\helpers\Url;
use app\models\ServiceCategory;
use app\components\MenuWidget;

AppAsset::register($this);

\pavlinter\wow\WowAsset::register($this)->wow([
    'boxClass' => 'wow',
    'animateClass' => 'animated',
    'offset' => '0',
]);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>
    <body>
        <?php $this->beginBody() ?>
        <!--========================================================
                                HEADER
        =========================================================-->
        <!--        <div class="container">-->
        <div class="container-fluid">
            <div class="hidden-sm hidden-xs">
                <div class="fp_cart">
                    <a href="#" id="login"><span>Войти</span></a>
                    <form id="search" method="get" action="<?= Url::to(['category/search']) ?>" style="
                          display: none;">
                        <input type="text" placeholder="Поиск" name="q">
                    </form>
                    <a href="#" ><span onclick="search()" class="glyphicon glyphicon-search"></span></a>
                    <a href="#" ><span class="glyphicon glyphicon-shopping-cart"></span></a>   
                </div>
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
            <?php if (Yii::$app->controller->id == 'service' OR Yii::$app->controller->id == 'site') { ?>
                <div class="service-line"></div>
            <?php } else { ?>
                <div class="block-line">
                    <h1 class="wow fadeIn animated" data-wow-delay="0.2s"><?= $this->title ?></h1>
                    <img src="/images/bg_top.png" class="img-responsive" style="visibility: hidden;margin-top: -10%;">
                </div>
            <?php } ?>
            <!--========================================================
                                    CONTENT
            =========================================================-->
            <?= $content ?>

            <!--========================================================
                                    FOOTER
            =========================================================-->
            <?php if (Yii::$app->controller->id == 'calc') { ?>
                <!--                <div class="block-5 type1">-->
                <!--                <div class="block-2 type1">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                                <a href="/calc/bcard">
                                                    <img class="img-responsive img-circle" src="/images/bcard.jpg" alt=""/>
                                                    <h2>Визитки</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                                <a href="/calc/flysheet">
                                                    <img class="img-responsive img-circle" src="/images/flysheet.jpg" alt=""/>
                                                    <h2>Листовки</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                                <a href="/calc/silkscreen">
                                                    <img class="img-responsive img-circle" src="/images/silck.jpg" alt=""/>
                                                    <h2>Шелкография визиток</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                                                <a href="/calc/plastic-card">
                                                    <img class="img-responsive img-circle" src="/images/plasticcard.jpg" alt=""/>
                                                    <h2>Пластиковые карты</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                                <a href="/calc/large-printing">
                                                    <img class="img-responsive img-circle" src="/images/poster.jpg" alt=""/>
                                                    <h2>Широкоформат</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                                                <a href="/calc/ss-printing">
                                                    <img class="img-responsive img-circle" src="/images/poster.jpg" alt=""/>
                                                    <h2>Шелкография листовая</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->


                <!--                <div class="block-3 type1">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                                <a href="/calc/bcard">
                                                    <img class="img-responsive img-circle" src="/images/bcard.jpg" alt=""/>
                                                    <h2>Визитки</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                                <a href="/calc/flysheet">
                                                    <img class="img-responsive img-circle" src="/images/flysheet.jpg" alt=""/>
                                                    <h2>Листовки</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                                <a href="/calc/silkscreen">
                                                    <img class="img-responsive img-circle" src="/images/silck.jpg" alt=""/>
                                                    <h2>Шелкография визиток</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                                                <a href="/calc/plastic-card">
                                                    <img class="img-responsive img-circle" src="/images/plasticcard.jpg" alt=""/>
                                                    <h2>Пластиковые карты</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                                <a href="/calc/large-printing">
                                                    <img class="img-responsive img-circle" src="/images/poster.jpg" alt=""/>
                                                    <h2>Широкоформат</h2>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                                            <div class="wow fadeIn  animated" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                                                <a href="/calc/ss-printing">
                                                    <img class="img-responsive img-circle" src="/images/poster.jpg" alt=""/>
                                                    <h2>Шелкография листовая</h2>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>-->


                <div class="block-c type1">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="wow fadeIn  animated" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                <a href="/calc/bcard">
                                    <img class="img-responsive img-circle" src="/images/bcard.jpg" alt=""/>
                                    <h2>Визитки</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="wow fadeIn  animated" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeIn;">
                                <a href="/calc/flysheet">
                                    <img class="img-responsive img-circle" src="/images/flysheet.jpg" alt=""/>
                                    <h2>Листовки</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="wow fadeIn  animated" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeIn;">
                                <a href="/calc/silkscreen">
                                    <img class="img-responsive img-circle" src="/images/silck.jpg" alt=""/>
                                    <h2>Шелкография визиток</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="wow fadeIn  animated" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                                <a href="/calc/plastic-card">
                                    <img class="img-responsive img-circle" src="/images/plasticcard.jpg" alt=""/>
                                    <h2>Пластиковые карты</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="wow fadeIn  animated" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeIn;">
                                <a href="/calc/large-printing">
                                    <img class="img-responsive img-circle" src="/images/poster.jpg" alt=""/>
                                    <h2>Широкоформат</h2>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="wow fadeIn  animated" data-wow-delay="0.7s" style="visibility: visible; animation-delay: 0.7s; animation-name: fadeIn;">
                                <a href="/calc/ss-printing">
                                    <img class="img-responsive img-circle" src="/images/poster.jpg" alt=""/>
                                    <h2>Шелкография листовая</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <div class="social-block">
                <div class="row">
                    <div class="col-md-12">
                        <a href="https://vk.com/printellect5707590" target="_blank"><img src="/images/logo_vk.png" alt=""></a>
                        <a href="https://www.instagram.com/printellect.ru/" target="_blank"><img src="/images/logo_insta.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <?= MenuWidget::widget(['tpl' => 'menu_vertical']); ?>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <ul class="list list-1">
                            <li><a href="<?= Url::to('/site/contact') ?>">Контакты</a></li>
                            <li><a href="<?= Url::to('/site/delivery') ?>">Доставка</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <ul class="list list-1">
                            <li><a href="<?= Url::to('/site/requisites') ?>">Реквизиты</a></li>
                            <li><a href="<?= Url::to('/site/legalinfo') ?>">Технические требования</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <h5>Контакты</h5>
                        <p>Tел. <?= Yii::$app->params['phone'] ?></p> 
                        <p>Email: <?= Yii::$app->params['companyEmail'] ?></p>
                        <p><?= Yii::$app->params['companyName'] ?> <?= Yii::$app->params['companyAddress'] ?></p>
                    </div>
                    <div class="col-lg-12">
                        &copy; 2017 Printellect. Все права защищены.
                    </div>
                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
    </body>
    <script type="text/javascript">
        $(function () {
            $('#mi-slider').catslider();
        });
    </script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                (i[r].q = i[r].q || []).push(arguments)
            }, i[r].l = 1 * new Date();
            a = s.createElement(o), m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-60480051-1', 'auto');
        ga('send', 'pageview');
    </script>
</html>
<?php $this->endPage() ?>
