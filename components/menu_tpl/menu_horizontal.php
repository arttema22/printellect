<ul class="navbar-nav navbar-right nav-ul nav">
    <li>
        <a href="<?= \yii\helpers\Url::to(['/site/index']) ?>">
            Главная
        </a>
    </li>
    <?php foreach ($menu as $item): ?>
        <li>
            <a href="<?= \yii\helpers\Url::to(['/category/view', 'id' => $item['id']]) ?>">
                <?= $item['name'] ?>
            </a>
        </li>
    <?php endforeach; ?>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/photoservice/index']) ?>">
            Фотоуслуги
        </a>
    </li>
    <li>
        <a href="<?= \yii\helpers\Url::to(['/calc/index']) ?>">
            Цены
        </a>
    </li>
        <li>
        <a href="<?= \yii\helpers\Url::to(['/site/contact']) ?>">
            Контакты
        </a>
    </li>
</ul>