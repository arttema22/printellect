<ul class="list list-1">
    <?php foreach ($menu as $item): ?>
        <li>
            <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $item['id']]) ?>">
                <?= $item['name'] ?>
            </a>
        </li>
    <?php endforeach; ?>
    <li>
        <a href="<?= \yii\helpers\Url::to(['photoservice/index']) ?>">
            Фотоуслуги
        </a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['calc/index']) ?>">
            Цены
        </a>
    </li>
</ul>