<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.png">
        <link rel="stylesheet" href="assets/css/uikit.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>Newdale 🖥️</title>

        <meta property="og:site_name" content="Newdale Network">
        <meta property="og:site" content="https://www.newdale.net">
        <meta property="og:title" content="Newdale network - Status 🖥️">
        <meta property="og:description" content="The free-to-use network with many features!">
        <meta property="og:image" content="https://cdn.discordapp.com/attachments/882162600425693234/911333136275742751/output-onlinepngtools_1.png">
        <meta content="#009688" data-react-helmet="true" name="theme-color">

    </head>
    <body class="nobar" onload="websmo()">
    <?php
    require('inc/navbar.php'); 
    ?>
        <div class="uk-height-large uk-background-cover uk-light uk-flex uk-animation-slide-bottom" uk-parallax="bgy: -300" style="background-image: url('assets/img/img6.png');">

            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Server status 🖥️</h1>
        
        </div>
        <div class="uk-container uk-container-medium" >
            <h2 class="uk-h1 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Newdale network servers:</h2>
            <div class="uk-child-width-1-2@m uk-grid-match uk-text-center uk-margin-medium-top uk-grid" data-uk-grid="" style="margin: 20px;">
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" ></a>
                        <h3 class="uk-card-title uk-margin">Main website</h3>
                        <?php
                        if (!$socket = @fsockopen("newdale.net", 80, $errno, $errstr, 3))
                        {
                            echo "<img src='assets/img/offline.png'>";
                          }
                          else 
                          {
                            echo "<img src='assets/img/online.png'>";
                          
                          
                            fclose($socket);
                          }
                          ?>
                        
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin">Forums</h3>
                        <?php
                        if (!$socket = @fsockopen("dev.newdale.net", 80, $errno, $errstr, 3))
                        {
                            echo "<img src='assets/img/offline.png'>";
                          }
                          else 
                          {
                            echo "<img src='assets/img/online.png'>";
                          
                          
                            fclose($socket);
                          }
                          ?>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin">Dev port 1</h3>
                        <?php
                        if (!$socket = @fsockopen("dev1.newdale.net", 80, $errno, $errstr, 3))
                        {
                            echo "<img src='assets/img/offline.png'>";
                          }
                          else 
                          {
                            echo "<img src='assets/img/online.png'>";
                          
                          
                            fclose($socket);
                          }
                          ?>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin">Moderation network</h3>
                        <?php
                        if (!$socket = @fsockopen("moderation.newdale.net", 80, $errno, $errstr, 3))
                        {
                            echo "<img src='assets/img/offline.png'>";
                          }
                          else 
                          {
                            echo "<img src='assets/img/online.png'>";
                          
                          
                            fclose($socket);
                          }
                          ?>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin">Staff network</h3>
                        <?php
                        if (!$socket = @fsockopen("staff.newdale.net", 80, $errno, $errstr, 3))
                        {
                            echo "<img src='assets/img/offline.png'>";
                          }
                          else 
                          {
                            echo "<img src='assets/img/online.png'>";
                          
                          
                            fclose($socket);
                          }
                          ?>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover"></a>
                        <h3 class="uk-card-title uk-margin">File server</h3>
                        <?php
                        if (!$socket = @fsockopen("files.newdale.net", 80, $errno, $errstr, 3))
                        {
                            echo "<img src='assets/img/offline.png'>";
                          }
                          else 
                          {
                            echo "<img src='assets/img/online.png'>";
                          
                          
                            fclose($socket);
                          }
                          ?>
                    </div>
                </div>
            </div>
        </div>
        <?php
        require('inc/footer.php');
        ?>
        <script src="assets/js/uikit.js"></script>
        <script src="assets/js/uikit-icons.js"></script>
        <script src="assets/js/ajax.js"></script>
    </body>
</html>