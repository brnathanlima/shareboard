<div class="starter-template">
    <p class="lead">
    <?php if (isset($_SESSION['is_logged_in'])) : ?>
    <a class="btn btn-success" href="<?= ROOT_PATH . '/shares/add' ?>">Share now</a>
    <?php endif; ?>
    </p>

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