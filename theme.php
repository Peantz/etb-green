<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encoding, browser compatibility, viewport -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Search Engine Optimization (SEO) -->
    <meta name="title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
    <meta name="description" content="<?= $Wcms->page('description') ?>">
    <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">
    <meta property="og:url" content="<?= $Wcms->getCurrentPageUrl() ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="<?= $Wcms->get('config', 'siteTitle') ?>" />
    <meta property="og:title" content="<?= $Wcms->page('title') ?>" />
    <meta name="twitter:title" content="<?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>" />
    <meta name="twitter:description" content="<?= $Wcms->page('description') ?>" />

    <!-- Website and page title -->
    <title><?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?></title>

    <!-- Admin CSS -->
    <?= $Wcms->css() ?>

    <!-- External CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">
</head>

<body>
    <!-- Admin settings panel and alerts -->
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
                <!-- Main content for each page -->
                <?= $Wcms->page('content') ?>
            </div>
        </section>

        <!-- Static editable block, same on each page -->
        <!--<section class="wrapper style2">
            <div class="inner">
                <?= $Wcms->block('subside') ?>
            </div>
        </section>-->
    </div>

    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <!-- Footer -->
            <?= $Wcms->footer() ?>
        </div>
    </footer>

    <!-- Admin JavaScript. More JS libraries can be added below -->
    <?= $Wcms->js() ?>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybBhC3ANr3bbfn1pqaFb4Fw/jpEj9Da9bzS0zZ9N4pGvi3P6X" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeo5zW+edzt7Id7b8xt6U6fX5EaqoTPOxM+VZpfgPKR0UL0B" crossorigin="anonymous"></script>
</body>
</html>
