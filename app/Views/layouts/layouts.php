<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title><?= $title ?></title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="<?= base_url('/dist') ?>/assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('/dist') ?>/assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="<?= base_url('/dist') ?>/assets/modules/jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?= base_url('/dist') ?>/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="<?= base_url('/dist') ?>/assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url('/dist') ?>/assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?= base_url('/dist') ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?= base_url('/dist') ?>/assets/css/components.css">
    <!-- Start GA -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-94034622-3');
    </script>
    <!-- /END GA -->
</head>

<body class="layout-3">
    <div id="app">
        <div class="main-wrapper container">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <a href="<?= base_url('/') ?>" class="navbar-brand"><?= $title ?></a>
                <ul class="navbar-nav">
                    <li class="nav-item <?= $title == 'Tiktok Downloader' ? 'active' : '' ?>"><a href="<?= base_url('/') ?>" class="nav-link">Tiktok</a></li>
                    <li class="nav-item <?= $title == 'Youtube Downloader' ? 'active' : '' ?>"><a href="<?= base_url('/youtube') ?>" class="nav-link">Youtube</a></li>
                    <li class="nav-item <?= $title == 'Chatbot GPT-3' ? 'active' : '' ?>"><a href="<?= base_url('/chat') ?>" class="nav-link">Chatbot GPT-3</a></li>
                    <li class="nav-item <?= $title == 'DALL-e GPT-3' ? 'active' : '' ?>"><a href="<?= base_url('/image') ?>" class="nav-link">DALL-e GPT-3</a></li>
                </ul>
            </nav>

            <!-- Main Content -->
            <?= $this->renderSection('content'); ?>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?= date('Y') ?>
            </footer>
        </div>
    </div>
    <!-- General JS Scripts -->
    <script src="<?= base_url('/dist') ?>/assets/modules/jquery.min.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/popper.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/tooltip.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/moment.min.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="<?= base_url('/dist') ?>/assets/modules/jquery.sparkline.min.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/chart.min.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/owlcarousel2/dist/owl.carousel.min.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/summernote/summernote-bs4.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/modules/chocolat/dist/js/jquery.chocolat.min.js"></script>

    <!-- Page Specific JS File -->
    <script src="<?= base_url('/dist') ?>/assets/js/page/index.js"></script>

    <!-- Template JS File -->
    <script src="<?= base_url('/dist') ?>/assets/js/scripts.js"></script>
    <script src="<?= base_url('/dist') ?>/assets/js/custom.js"></script>
</body>

</html>