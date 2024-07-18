<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
</head>
<body>
    <?= $Wcms->settings() ?>
    <?= $Wcms->alerts() ?>

    <section id="topMenu" class="bg-light">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="<?= $Wcms->url() ?>">
                    <img src="<?= $Wcms->asset('img/logo.png') ?>" alt="Logo" class="img-fluid" style="max-height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <?= $Wcms->menu() ?>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <div id="wrapper" class="container">
        <section id="intro" class="py-5">
            <div class="inner text-center">
                <?= $Wcms->page('content') ?>
            </div>
        </section>
    </div>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <?= $Wcms->footer() ?>
        </div>
    </footer>

    <?= $Wcms->js() ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
