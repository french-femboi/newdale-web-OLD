<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.png">
        <link rel="stylesheet" href="assets/css/uikit.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>Newdale 💰</title>

        <meta property="og:site_name" content="Newdale Network">
        <meta property="og:site" content="https://www.newdale.net">
        <meta property="og:title" content="Newdale network - Premium plugins 💰">
        <meta property="og:description" content="The free-to-use network with many features!">
        <meta property="og:image" content="https://cdn.discordapp.com/attachments/882162600425693234/911333136275742751/output-onlinepngtools_1.png">
        <meta content="#009688" data-react-helmet="true" name="theme-color">

    </head>
    <body class="nobar" onload="websmo()">
    <?php
    require('inc/navbar.php'); 
    ?>
        <div id="offcanvas-usage" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>About us 🎉</h3>

                <p>We at Newdale don't want any money, or a lot of users. We just want a friendly community where players can share awesome moments together! We want you to enjoy our services and servers without any lagging, corruption or viruses. We exist since late 2019 which means that we exist since about 2 years. (that was written in january 2022)</p>

            </div>
        </div>
        <div class="uk-section" uk-scrollspy="cls: uk-animation-slide-left;">
            <div class="uk-container">
                <h1>Newdale's premium plugins 💰</h1>
            </div>
        </div>
        <div class="uk-container uk-container-medium" >
            <h2 class="uk-h1 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Zerotoil development:</h2>
            <p class="uk-text-lead uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Available <a href="https://dev.zerotoil.net/">here</a>!</p>
            <div class="uk-child-width-1-2@m uk-grid-match uk-text-center uk-margin-medium-top uk-grid" data-uk-grid="" style="margin: 20px;">
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Cyberworldreset</h3>
                        <p>Used in: CB01</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Cyberlevels (non premium)</h3>
                        <p>Used in: CB01, Minigames, Parkour, SMP</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">S.I.R (non premium)</h3>
                        <p>Used in: Every server</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-container uk-container-medium" >
            <h2 class="uk-h1 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Other plugins:</h2>
            <p class="uk-text-lead uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Other premium plugins:</p>
            <div class="uk-child-width-1-2@m uk-grid-match uk-text-center uk-margin-medium-top uk-grid" data-uk-grid="" style="margin: 20px;">
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Networkmanager</h3>
                        <p>Server management</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">AdvancedGUI</h3>
                        <p>Player Experience</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">LagAssist</h3>
                        <p>Player experience</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">AdditionsPlus</h3>
                        <p>Player experience</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">ItemsAdder</h3>
                        <p>Player experience and Management</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require('inc/footer.php');
        ?>

        <script src="assets/js/uikit.js"></script>
        <script src="assets/js/uikit-icons.js"></script>
    </body>
</html>