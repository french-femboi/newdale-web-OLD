<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.png">
        <link rel="stylesheet" href="assets/css/uikit.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>Newdale 🗂️</title>

        <meta property="og:site_name" content="Newdale Network">
        <meta property="og:site" content="https://www.newdale.net">
        <meta property="og:title" content="Newdale network - Services 🗂️">
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
        <div id="offcanvas-usage-01" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Minecraft server 🖥️</h3>

                <p>We have a minecraft community server! The ip is <b id="SRVip">mc.newdale.net</b>! This website is basically about is so there's no need to tell you more...</p>
                <button class="uk-button uk-button-default uk-text-capitalize" onclick="CopyToClipboard('SRVip');return false;" style="border-radius: 15px;">Copy adress</button>

            </div>
        </div>
        <div id="offcanvas-usage-02" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>File downloads 🗂️</h3>

                <p>We also have a file server! You can download multiple official files from newdale and it's partners there.</p>
                <a href="https://files.newdale.net" target="_blank">
                <button class="uk-button uk-button-default uk-text-capitalize" href="https://files.newdale.net"  style="border-radius: 15px;">Open in new tab</button>
                </a>

            </div>
        </div>
        <div id="offcanvas-usage-03" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Forums ❓</h3>

                <p>Have any question? Need help? Just want to chat? Don't hesitate to join our Forums!</p>
                <a href="https://dev.newdale.net" target="_blank">
                    <button class="uk-button uk-button-default uk-text-capitalize" href="https://dev.newdale.net"  style="border-radius: 15px;">Open in new tab</button>
                </a>

            </div>
        </div>
        <div id="offcanvas-usage-04" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>Discord server 📨</h3>

                <p>Join our wonderful community and chat, play games or just chill!</p>
                <iframe src="https://discord.com/widget?id=852926510162509826&theme=dark" width="250" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>
                <a href="https://discord.gg/MqjmNGZk5j" target="_blank">
                    <button class="uk-button uk-button-default uk-text-capitalize" href="https://discord.gg/MqjmNGZk5j"  style="border-radius: 15px;">Join our Discord</button>
                </a>
            </div>
        </div>
        <div class="uk-height-large uk-background-cover uk-light uk-flex uk-animation-slide-bottom" uk-parallax="bgy: -300" style="background-image: url('assets/img/img2.png');">

            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Services 🗂️</h1>
        
        </div>
        <div class="uk-container uk-container-medium" >
            <h2 class="uk-h1 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;"></h2>
            <p class="uk-text-lead uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Our best-made services for you!</p>
            <div class="uk-child-width-1-2@m uk-grid-match uk-text-center uk-margin-medium-top uk-grid" data-uk-grid="" style="margin: 20px;">
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-01"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Minecraft server 🖥️</h3>
                        <p>Beta 8.0 is coming out pretty soon! Check it out here!</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-02"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">File downloads 🗂️</h3>
                        <p>We have an advanced DDOS protection hosted by OVH.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-03"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Forums ❓</h3>
                        <p>Look at our new website system! Fresh and shiny (like our server)</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-04"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">Discord server 📨</h3>
                        <p>Mietzchen is currently remaking our discord server!</p>
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