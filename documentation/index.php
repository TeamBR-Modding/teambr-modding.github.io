<!DOCTYPE html>
<html lang="en-US">

<head>
    <title>Documentation</title>
    <?php include('../includes/metaBuilder.php'); ?>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/uikit.js"></script>
    <script src="/js/components/sticky.min.js"></script>
</head>

<body>

    <?php
     include '../includes/googleAnalytics.php';
        include '../includes/navBuilder.php';
        ?>

    <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

        <ul class="uk-grid uk-grid-width-large-1-2" data-uk-grid-margin data-uk-grid-match="{ target: '.uk-panel' }">
            <li>
                <figure class="uk-overlay uk-overlay-hover">
                    <div class="uk-panel">
                        <img src="/assets/img/screenshots/bookshelf.png">
                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                            <div class="uk-heading-large uk-text-contrast uk-text-large uk-text-center">Bookshelf</div>
                            <div class="uk-grid uk-container-center">
                                <a class="uk-button uk-text-center uk-button-success uk-button-large uk-container-center" href="/mods/bookshelf/">Learn More</a>
                                <a class="uk-button uk-text-center uk-button-large uk-container-center" href="/downloads/#bookshelf">Download</a> </div>
                        </figcaption>
                    </div>
                </figure>
            </li>

            <li>
                <figure class="uk-overlay uk-overlay-hover">
                    <div class="uk-panel">
                        <img src="/assets/img/screenshots/neotech.png">
                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                            <div class="uk-heading-large uk-text-contrast uk-text-large uk-text-center">Neotech</div>
                            <div class="uk-grid uk-container-center">
                                <a class="uk-button uk-text-center uk-button-success uk-button-large uk-container-center" href="/mods/neotech/">Learn More</a>
                                <a class="uk-button uk-text-center uk-button-large uk-container-center" href="/downloads/#neotech">Download</a>
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </li>

            <li>
                <figure class="uk-overlay uk-overlay-hover">
                    <div class="uk-panel">
                        <img src="/assets/img/screenshots/modularsystems.png">
                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                            <div class="uk-heading-large uk-text-contrast uk-text-large uk-text-center">Modular Systems</div>
                            <div class="uk-grid uk-container-center">
                                <a class="uk-button uk-text-center uk-button-success uk-button-large uk-container-center" href="/mods/modularsystems/">Learn More</a>
                                <a class="uk-button uk-text-center uk-button-large uk-container-center" href="/downloads/#modularsystems">Download</a>
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </li>

            <li>
                <figure class="uk-overlay uk-overlay-hover">
                    <div class="uk-panel">
                        <img src="/assets/img/screenshots/tcnodetracker.png">
                        <figcaption class="uk-overlay-panel uk-overlay-background uk-overlay-fade">
                            <div class="uk-heading-large uk-text-contrast uk-text-large uk-text-center">Thaumcraft Node Tracker</div>
                            <div class="uk-grid uk-container-center">
                                <a class="uk-button uk-text-center uk-button-success uk-button-large uk-container-center" href="/mods/tcnodetracker/">Learn More</a>
                                <a class="uk-button uk-text-center uk-button-large uk-container-center" href="/downloads/#tcnodetracker">Download</a>
                            </div>
                        </figcaption>
                    </div>
                </figure>
            </li>

        </ul>
    </div>

    <?php include '../includes/footer.php' ?>
</body>
</html>
