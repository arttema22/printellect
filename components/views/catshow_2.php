<div id="content">
    <div class="full-width-container">
        <div class="container">
            <div class="block-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="indent-1"><?= $category->name; ?><span> <?= $category->description; ?></span></h3>
                        </div>
                    </div>
                    <div class="row">
                        <?php foreach ($show as $showone): ?>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="thumb-pad-5 wow fadeIn" data-wow-delay="0.3s">
                                    <div class="div">
                                        <?php //$img = $showone->getImage(); ?> 
                                        <?php //= Html::img($img->getUrl('270x'), ['alt' => $showone['name'], 'class' => 'img-responsive']); ?> 

                                        <img src="/images/page1-img1.jpg" alt="photo" class="img-responsive">
                                        <div class="caption">
                                            <h5><?= $showone['name'] ?></h5>                                                                      
                                            <p><?= mb_substr($showone['description'], 0, 100) ?></p>
                                            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $showone['id']]) ?>" class="btn-default btn btn-1 original">Подробнее</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div> 
        </div> 
    </div>  
</div>
