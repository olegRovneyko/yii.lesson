<li>
    <a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $category['id']]) ?>"><?=$category['name']?>
    <?php if (isset($category['childs'])) : ?>
        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
    </a>
        <ul>
            <?= $this->getMenuHtml($category['childs']) ?>
        </ul>
    <?php else : ?>
    </a>
    <?php endif; ?>
</li>