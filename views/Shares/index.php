<div class="starter-template">
    <p class="lead"><a class="btn btn-success" href="<?= ROOT_PATH . '/shares/add' ?>">Share now</a></p>

    <?php foreach ($viewModel as $item) : ?>
        <?= $item['title'] ?><br>
        <small><?= $item['create_date'] ?></small>
        <p><?= $item['body'] ?></p>
        <br>
        <a class="btn btn-primary" href="<?= $item['link'] ?>" target="_blank">Go to website</a>
        <br><br>
        <hr/>
    <?php endforeach; ?>
</div>