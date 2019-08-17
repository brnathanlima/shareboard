<!DOCTYPE <!DOCTYPE html>
    <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
    <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
    <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
    <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shareboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= ROOT_URL ?>/assets/css/style.css">
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
            <a class="navbar-brand" href="#">Shareboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= ROOT_URL ?>">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="<?= ROOT_URL.'/shares' ?>">Shares</a>
                </li>
                </ul>
                <ul class="navbar-nav navbar-right">
                    <?php if (!isset($_SESSION['is_logged_in'])) : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>/users/login">Login<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>/users/register">Register<span class="sr-only">(current)</span></a>
                    </li>
                    <?php else : ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>">Welcome, <?= $_SESSION['user_data']['name'] ?><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= ROOT_URL ?>/users/logout">Logout<span class="sr-only">(current)</span></a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
        <main role="main" class="container">
            <?php if (isset($_SESSION['errorMsg'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php
                echo $_SESSION['errorMsg'];
                unset($_SESSION['errorMsg']);
                ?>
            </div>
            <?php elseif (isset($_SESSION['successMsg'])) : ?>
            <div class="alert alert-success " role="alert">
            <?php
                echo $_SESSION['successMsg'];
                unset($_SESSION['successMsg']);
            ?>
            </div>
            <?php endif; ?>
            <?php require($view); ?>
        </main><!-- /.container -->
    </body>
</html>