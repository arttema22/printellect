<div id="content">
    <div class="full-width-container">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-8">
                    <div class="block-1 indent-3 bg-1 fw left-side oneHeight">
                        <div class="wow fadeInLeft" data-wow-delay="0.3s">
                            <h3 class="indent-2"><?= $category->description; ?></h3>
                            <div class="box-5">
                                <h5><?= $category->name; ?></h5>
                                <p><?= $category->s_desc?></p>
                                <div class="row">
                                    <?php foreach ($show as $showone): ?>
                                        <div class="col-lg-6">
                                            <ul class="list list-3">
                                                <li>
                                                    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $showone['id']]) ?>" class="card hvr-curl-bottom-right hvr-grow-shadow">
                                                        <?= $showone['name'] ?>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="block-1 indent-3 bg-2 fw right-side oneHeight">      
                        <div class="box-1">
                            <div class="wow fadeInRight" data-wow-delay="0.3s">
                                <h3><?= $category->name; ?><br><span><?= $category->description; ?></span></h3>
                                <p><?= $category->s_desc?></p>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>