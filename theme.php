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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="<?= $Wcms->asset('css/style.css') ?>">

    <!-- ICON -->
    <link rel="icon" href="https://bauersite.b1ggi.ovh/data/files/favicon.png">
     
</head>

<body>
    <!-- Admin settings panel and alerts -->
    <?= $Wcms->settings() ?>
    <?= $Wcms->alerts() ?>

    <section id="topMenu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <a class="navbar-brand" href="<?= $Wcms->url() ?>">
                    <img src="<?= $Wcms->asset('img/logo.png') ?>" alt="Logo" class="img-fluid" style="max-height: 50px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <?php
                        $menuItems = $Wcms->menu();
                        $currentUrl = $Wcms->getCurrentPageUrl();
                        $menuItems = str_replace('<a href="' . $currentUrl . '">', '<a href="' . $currentUrl . '" class="active">', $menuItems);
                        echo $menuItems;
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </section>

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <?php
            $breadcrumb = '';
            $url = '';
            $parts = explode('/', trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/'));
            foreach ($parts as $part) {
                $url .= '/' . $part;
                $decodedPart = urldecode($part);
                $breadcrumb .= '<li class="breadcrumb-item"><a href="' . $url . '">' . ucfirst($decodedPart) . '</a></li>';
            }
            echo $breadcrumb;
            ?>
        </ol>
    </nav>

    <div id="wrapper">
        <section id="intro" class="wrapper style1 fullscreen">
            <div class="inner">
                <!-- Main content for each page -->
                <?= $Wcms->page('content') ?>
            </div>
        </section>

        <!-- Static editable block, same on each page -->
        <!--<section class="wrapper style2">
            <div class="inner">

                <<?= $Wcms->block('subside') ?>
            </div>
        </section>-->
    </div>

    <footer class="wrapper style2">
        <div class="inner">
            <!-- Footer -->
            <?= $Wcms->footer() ?>
        </div>
    </footer>

    <!-- Admin JavaScript. More JS libraries can be added below -->
    <?= $Wcms->js() ?>

    <!-- Custom JavaScript to add active class to navbar links -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var currentUrl = window.location.href;
            var menuItems = document.querySelectorAll('#navbarNav a');
            
            menuItems.forEach(function(menuItem) {
                if (menuItem.href === currentUrl) {
                    menuItem.classList.add('active');
                }
            });
        });
    </script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>
