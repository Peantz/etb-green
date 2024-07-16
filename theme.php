<?php global $Wcms ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Encoding, browser compatibility, viewport -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
    <title>
        <?= $Wcms->get('config', 'siteTitle') ?> - <?= $Wcms->page('title') ?>
    </title>

    <!-- Admin CSS -->
    <?= $Wcms->css() ?>

    <!-- External CSS Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" rel="preload" as="style" href="<?= $Wcms->asset('css/style.css') ?>">
</head>

<body>
    <!-- Admin settings panel and alerts -->
    <?= $Wcms->settings() ?>

    <?= $Wcms->alerts() ?>

    <section id="topMenu">
        <div class="inner">
            <nav>
                <ul class="menu">
                    <!-- Logo hinzufügen -->
                    <li class="logo">
                        <a href="<?= $Wcms->url() ?>">
                            <img src="<?= $Wcms->asset('img/logo.png') ?>" alt="Logo">
                        </a>
                    </li>
                    <!-- Burger-Button -->
                    <li class="burger">
                        <a href="javascript:void(0);" onclick="toggleMenu()">
                            <i class="fas fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <!-- Menü -->
                <ul id="menuItems" class="menu-items">
                    <?= $Wcms->menu() ?>
                </ul>
            </nav>
        </div>
    </section>

    <div id="wrapper">
        <section id="intro" class="wrapper style1 fullscreen">
            <div class="inner">
                <!-- Main content for each page -->
                <?= $Wcms->page('content') ?>
            </div>
        </section>

        <section class="wrapper style2">
            <div class="inner">
                <!-- Static editable block, same on each page -->
                <?= $Wcms->block('subside') ?>
            </div>
        </section>
    </div>

    <footer class="wrapper style2">
        <div class="inner">
            <!-- Footer -->
            <?= $Wcms->footer() ?>
        </div>
    </footer>

    <!-- Admin JavaScript. More JS libraries can be added below -->
    <?= $Wcms->js() ?>

    <script>
    function toggleMenu() {
        var menuItems = document.getElementById("menuItems");
        if (menuItems.classList.contains("active")) {
            menuItems.classList.remove("active");
        } else {
            menuItems.classList.add("active");
        }
    }
    </script>
</body>
</html>
