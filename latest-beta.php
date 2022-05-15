<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.png">
        <link rel="stylesheet" href="assets/css/uikit.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>Newdale 🚧</title>

        <meta property="og:site_name" content="Newdale Network">
        <meta property="og:site" content="https://www.newdale.net">
        <meta property="og:title" content="Newdale network - Latest beta 🚧">
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

                <h3>Resource pack 🗂️</h3>

                <p>Custom resource packs provided by Itemsadder, and multiple addons including ones made by the owner yumithecat!</p>

            </div>
        </div>
        <div id="offcanvas-usage-01" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Resource pack 🗂️</h3>

                <p>Custom resource packs provided by Itemsadder, and multiple addons including ones made by the owner yumithecat!</p>

            </div>
        </div>
        <div id="offcanvas-usage-02" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Overall features 🌅</h3>

                <p>Added a party system and improved a lot of the appearance (software side) on our server!</p>
                </a>

            </div>
        </div>
        <div id="offcanvas-usage-03" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Maps 🌏</h3>

                <p>Our build team has put it's hand on building completely brand new and bigger maps! Including new CB01 map, renovated lobby, and minigames spawn!</p>

            </div>
        </div>
        <div id="offcanvas-usage-04" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Server version ⌨️</h3>

                <p>We changed our server version from <b>1.17.1</b> to <b>1.18</b>! Also we upgraded from windows server to Ubuntu server giving our performance a big boost!</p>
            </div>
        </div>
        <div class="uk-height-large uk-background-cover uk-light uk-flex uk-animation-slide-bottom" uk-parallax="bgy: -300" style="background-image: url('assets/img/img5.png');">

            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Beta 8.0 🎉</h1>
        
        </div>
        <div class="uk-container uk-container-medium" >
            <h2 class="uk-h1 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;"></h2>
            <div class="uk-child-width-1-2@m uk-grid-match uk-text-center uk-margin-medium-top uk-grid" data-uk-grid="" style="margin: 20px;">
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-01"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Resource pack 🗂️</h3>
                        <p>Custom menus, loading screens and sounds!</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-02"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Overall features 🌅</h3>
                        <p>From touch screens to custom commands... We have everything!</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-03"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Maps 🌏</h3>
                        <p>New CB01 spawn and updated lobby!</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-04"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Server version ⌨️</h3>
                        <p>We switched from 1.17.1 to 1.18</p>
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