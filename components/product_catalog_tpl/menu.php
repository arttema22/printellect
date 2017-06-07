<li <?php if (isset($category['childs'])) echo 'class="dropdown"'; ?> >

    <?php if (isset($category['childs'])): ?>
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><?= $category['name'] ?> <b class="caret"></b></a>
        
    <?php else: ?>
        <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?>"><?= $category['name'] ?></a>
    <?php endif; ?>

    <?php if (isset($category['childs'])): ?>
        <ul class="dropdown-menu">
            <?= $this->getMenuHtml($category['childs']) ?>
        </ul>
    <?php endif; ?>
</li>
