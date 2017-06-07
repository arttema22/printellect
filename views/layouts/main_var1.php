<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\components\ArticleCatalogWidget;
use yii\bootstrap\NavBar;
use yii\bootstrap\Nav;
use yii\widgets\Menu;

//use app\assets\AppbottomAsset;

AppAsset::register($this);
//AppbottomAsset::register($this);
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

        <?php
//        echo Menu::widget([
//            'items' => [
//                ['label' => 'Главная', 'url' => ['site/index']],
//                ['label' => 'О компании', 'url' => ['site/about']],
//                ['label' => 'Услуги', 'url' => ['site/services']],
//                ['label' => 'Контакты', 'url' => ['site/contacts']],
//            ],
//            'options' => [
//                'id' => 'navid',
//                'class' => 'navbar-nav',
//                'style' => 'float: left; font-size: 16px;',
//                'data' => 'menu',
//            ],
//            'activeCssClass' => 'active',
//            'firstItemCssClass' => 'fist',
//            'lastItemCssClass' => 'last',
//        ]);
        ?>

        <?php
        NavBar::begin([
            'brandLabel' => Html::img('@web/images/logo.png', ['alt' => Yii::$app->name]),
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-inverse navbar-static-top',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right '],
            'items' => [
                ['label' => 'Home', 'url' => ['/site/index']],
                //ArticleCatalogWidget::widget(),
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ],
        ]);
        NavBar::end();
        ?>


        <?= $content ?>

        <!--========================================================
                                FOOTER
        =========================================================-->
        <footer class="clearfix">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3">
                            <h5>Информация</h5>
                            <ul class="list list-1">
                                <li>ООО «Принтеллект-СПб»</li>
                                <li>ИНН / КПП 7840499540/784001001</li>
                                <li>Р/Сч. №40702810206000005763</li>
                                <li>БИК 044030920</li>
                                <li>Банк: Санкт-Петербургский ф-л ОАО «Промсвязьбанк» г.Санкт-Петербург</li>
                                <li>Корр/сч. №30101810000000000920</li>
                                <li>ОГРН 1137847482805</li>
                                <li>ОКПО 33102783</li>
                                <li>ОКВЭД 22.22, 22.23, 22.25, 74.40, 22.15, 22.13, 22.12, 22.11</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3">
                            <h5>Контакты</h5>
                            <ul class="list list-1">
                                <li>Санкт-Петербург</li>
                                <li>ул. Гороховая, д. 50, лит. А, пом. 3Н</li>
                                <li>5707590@mail.ru</li>
                                <li>Телефон: (812) 570-75-90</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3">
                        </div>
                        <div class="col-lg-3 col-md-12">
                            <h5>Мы в сетях</h5>
                            <ul class="list social-list">
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://plus.google.com" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            Printellect &copy; <span id="copyright-year"></span>.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script>
            if (jQuery("body").width() > 767) {
                jQuery(".full-width-container").each(function ($) {
                    jQuery('.oneHeight', this).equalHeights();
                });
            }
            jQuery(window).resize(function () {
                jQuery(".full-width-container").each(function ($) {
                    jQuery('.oneHeight', this).height('auto');
                    if (jQuery("body").width() > 767) {
                        jQuery('.oneHeight', this).equalHeights();
                    }
                });
            });
        </script>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>
