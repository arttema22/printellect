<?php
$this->title = 'Примеры';
?>

<div class="photobook">
    <div class="row">
        <div class="data">
            <?php foreach ($media->data as $data) { ?>
                <div class="col-md-4 col-xs-6">
                    <a href="<?= $data->link; ?>" target="_blank">
                        <img src="<?= $data->images->standard_resolution->url; ?>" class="img-responsive">
                    </a>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
