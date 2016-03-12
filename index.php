<html lang="en-US">

<head>
    <title>Team BR Modding</title>
    <?php include('/includes/metaBuilder.php'); ?>
        <script src="/js/jquery.min.js"></script>
        <script src="/js/uikit.js"></script>
        <script src="/js/components/sticky.min.js"></script>
        <script src="/js/components/parallax.js"></script>
</head>

<body>
    <?php
     include '/includes/googleAnalytics.php';
        include '/includes/navBuilder.php';
        ?>

        <div class="uk-container uk-panel-box uk-container-center" style="background-color: #ff9800">
            <p class="uk-article-title uk-text-center uk-margin-top" style="color: black;">Warning: Site under heavy development</p>
        </div>

        <div class="uk-margin uk-margin-large-top uk-flex uk-flex-center uk-flex-middle" data-uk-parallax="{bg: '-120'}" style="background-image: url('http://i.imgur.com/X1E9yjR.png'); background-position: center;">
            <div class="uk-grid uk-margin-large-top uk-margin-large-bottom">
                <div class="uk-panel-box  uk-container-center teambr-panel">
                    <div class="uk-grid uk-grid-width-medium-1-2 uk-container-center">
                        <div>
                            <h1 class="uk-text-large uk-article-title  uk-margin-large-top">Team BR Modding</h1>
                            <p class="uk-container-center uk-margin-large-bottom  uk-margin-top-remove uk-text-muted">
                                The Team BR Modding organization is a sub group of the <a href="http://www.beyondrealitypack.com/">Beyond Reality Team. </a> The members of this organization are ones from the Beyond Reality team and are more or less the
                                technical members of the team.</p>

                        </div>
                        <div class="shittylogo">
                            <img src="/assets/img/logo.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

            <!-- Team Header -->
            <div class="uk-grid" data-uk-grid-margin>
                <div class="uk-width-1-1 uk-text-center uk-margin-large-top">
                    <h3 class="uk-heading-large">Mod Developers</h3>
                    <p class="uk-text-large">These are the people who code the mods</p>
                </div>

                <div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">

                    <!-- Coder Grid -->
                    <div class="uk-grid uk-container-center" data-uk-grid-margin>
                        <!-- Pauljoda -->
                        <div class="uk-width-medium-1-2 uk-text-center uk-container-center">
                            <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                                <figure class="uk-overlay uk-container-center">
                                    <img class="uk-border-circle" width="250" height="250" src="/assets/img/pauljoda.png" alt="pauljoda">
                                    <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                                        <div>
                                            <a href="https://twitter.com/pauljoda" target="_blank" class="uk-icon-button uk-icon-twitter"></a>
                                            <a href="https://github.com/pauljoda" target="_blank" class="uk-icon-button uk-icon-github"></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <h2 class="uk-margin-bottom-remove">Pauljoda</h2>
                            <p class="uk-text-large uk-margin-top-remove uk-text-muted">
                                Pauljoda is the creator of mods like Modular Systems, Mob Tools, and contributor to the Team BR Modding mods. </p>
                        </div>

                        <!-- Dyonovan -->
                        <div class="uk-width-medium-1-2 uk-text-center uk-container-center">
                            <div class="uk-thumbnail uk-overlay-hover uk-border-circle">
                                <figure class="uk-overlay">
                                    <img class="uk-border-circle" width="250" height="250" src="/assets/img/dyonovan.png" alt="Dyonovan">
                                    <figcaption class="uk-overlay-panel uk-overlay-background uk-flex uk-flex-center uk-flex-middle uk-text-center uk-border-circle">
                                        <div>
                                            <a href="https://twitter.com/dyonovan" target="_blank" class="uk-icon-button uk-icon-twitter"></a>
                                            <a href="https://github.com/Dyonovan" target="_blank" class="uk-icon-button uk-icon-github"></a>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                            <h2 class="uk-margin-bottom-remove">Dyonovan</h2>
                            <p class="uk-text-large uk-margin-top-remove uk-text-muted">
                                Dyonovan is the creator of the Thaumcraft Node Tracker mod as well as a contributor to the Team BR Modding mods</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <?php include '/includes/footer.php' ?>
</body>
</html>
