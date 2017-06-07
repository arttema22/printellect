<?php

use yii\helpers\Url;
use yii\bootstrap\Carousel;
?>

<div id="mycarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php $i = 0; ?>
        <?php foreach ($slider as $slide) { ?>
            <li data-target="#mycarousel" data-slide-to="<?= $i ?>" <?php if ($i == 0) echo'class="active"'; ?>></li>
            <?php $i++; ?>
        <?php } ?>
    </ol>
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <?php foreach ($slider as $slide) { ?>
            <div class="item">
                <img src="/images/slider/<?= $slide['img'] ?>" data-color="lightblue" alt="First Image">
                <div class="carousel-caption">
                    <?= $slide['description'] ?>
                </div>
            </div>
        <?php } ?>
    </div>
    <!-- Controls -->
    <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
