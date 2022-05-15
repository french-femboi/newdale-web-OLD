<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.png">
        <link rel="stylesheet" href="assets/css/uikit.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>Newdale ⬇️</title>

        <meta property="og:site_name" content="Newdale Network">
        <meta property="og:site" content="https://www.newdale.net">
        <meta property="og:title" content="Newdale network - Server-stats ⬇️">
        <meta property="og:description" content="The free-to-use network with many features!">
        <meta property="og:image" content="https://cdn.discordapp.com/attachments/882162600425693234/911333136275742751/output-onlinepngtools_1.png">
        <meta content="#009688" data-react-helmet="true" name="theme-color">

    </head>
    <body class="nobar" onload="websmo()">
    <?php
    require('inc/navbar.php'); 
    ?>
        <div class="uk-section" uk-scrollspy="cls: uk-animation-slide-left;">
            <div class="uk-container">
                <h1>Server stats ⬇️</h1>
            </div>
        </div>
        <div class="uk-container uk-container-medium" >
            <h2 class="uk-h1 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Our servers:</h2>
            <p class="uk-text-lead uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;"></p>
            <div class="uk-child-width-1-2@m uk-grid-match uk-text-center uk-margin-medium-top uk-grid" data-uk-grid="" style="margin: 20px;">
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" ></a>
                        <span uk-icon="icon: server; ratio: 4"></span>
                        <h3 class="uk-card-title uk-margin uk-text-success">Main server <b>01</b></h3>
                        <p>backend, minecraft, files</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <span uk-icon="icon: server; ratio: 4"></span>
                        <h3 class="uk-card-title uk-margin uk-text-success">Main server <b>02</b></h3>
                        <p>backend, dc-bots, radio, management, intranet</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <span uk-icon="icon: server; ratio: 4"></span>
                        <h3 class="uk-card-title uk-margin uk-text-success">Mail server <b>cluster</b></h3>
                        <p>Powered by <b>IONOS - 1&1</b></p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <span uk-icon="icon: server; ratio: 4"></span>
                        <h3 class="uk-card-title uk-margin uk-text-success">Webservers <b>cluster</b></h3>
                        <p>Powered by <b>IONOS - 1&1</b></p>
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