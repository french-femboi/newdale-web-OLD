<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link rel="shortcut icon" type="image/jpg" href="assets/img/logo.png">
        <link rel="stylesheet" href="assets/css/uikit.css"/>
        <link rel="stylesheet/less" type="text/css" href="assets/css/preloader.scss" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        <title>Newdale 🏠</title>

        <meta property="og:site_name" content="Newdale Network">
        <meta property="og:site" content="https://www.newdale.net">
        <meta property="og:title" content="Newdale network - Home 🏠">
        <meta property="og:description" content="The free-to-use network with many features!">
        <meta property="og:image" content="https://cdn.discordapp.com/attachments/882162600425693234/911333136275742751/output-onlinepngtools_1.png">
        <meta content="#009688" data-react-helmet="true" name="theme-color">

    </head>
    <body class="nobar" onload="websmo()">
        <div id="loader-wrapper">
			<div id="loader"></div>
            <h3 class="uk-visible@m" style="display: block;position: relative;left: 44%;top: 53%;z-index: 1002;">🎉 Newdale.net 🎉</h3>
            <h5 class="uk-visible@m" style="display: block;position: relative;left: 40%;top: 53%;z-index: 1002;">Developed and maintained by <b>Yumithecat#0001</b></h5>
            <h6 class="uk-visible@m" style="display: block;position: relative;left: 42%;top: 63%;z-index: 1002;">We support ukraine in these difficult times! <img src="/assets/img/ua.png" style="width: auto;height: 15px;" ></img></h6>
            
			<div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>

		</div>
        <div class=" uk-background-center-center uk-background-cover" uk-parallax="bgy: -200" style="background-image: url('https://files.newdale.net/files/gb-01.png');border-bottom-right-radius: 15px;border-bottom-left-radius: 15px">
            <div class="uk-position-cover" >
            </div>
            <div class="uk-position-cover" style="background-image: linear-gradient(to right top, rgba(195, 55, 100, 0.9), rgba(166, 42, 111, 0.9), rgba(130, 38, 117, 0.9), rgba(87, 38, 118, 0.9), rgba(29, 38, 113, 0.9));"></div>
            <?php
            require('inc/navbar.php'); 
            ?>
            <div class="uk-position-relative uk-container" uk-height-viewport="offset-top: true">
                    <div class="uk-section" uk-scrollspy="cls: uk-animation-slide-left;">
                        <div class="uk-container">
                            <div class="uk-alert-danger" uk-alert style="border-radius: 15px;">
                                <a class="uk-alert-close" uk-close></a>
                                <p style="text-align: center;">This website will get <b>replaced soon</b> to preview the changes: moderation.newdale.net</p>
                            </div>
                            <h1 style="font-size: 80px;color: white;" id="Greetings"></h1>
                            <h5 class="uk-text-success" style="font-size: 30px;">Welcome to the <b>Newdale network</b>!</h5>
                            <h5 style="color: white;">Stay strong ukraine! <img src="/assets/img/ua.png" style="width: auto;height: 15px;" ></img></h5>
                            <button class="uk-button uk-button-primary uk-margin-small-right uk-text-capitalize" type="button" uk-toggle="target: #offcanvas-usage" style="color: white;border-radius: 20px;">About 🎉</button>
                        </div>
                    </div>
                    <div id="scrolldown">⬇️ Please scroll down ⬇️</div>
            </div>
        </div>
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

                <h3>🎉 Beta 8.0 🎉</h3>

                <p>We'we been working day☀️ and night🌙, just for your comfort on our network! We will be releasing beta 8.0 pretty soon🎉! Stay tuned and join our discord server 🖥️ at <a href="https://newdale.net/discord">newdale.net/discord</a></p>

            </div>
        </div>
        <div id="offcanvas-usage-02" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>🚧 DDOS Protection 🚧</h3>

                <p>We now have a new DDOS protection! Our server ⌨️ is now even more secure! We use a ddos proetection proxy by OVH 😃. And it works very well!</p>

            </div>
        </div>
        <div id="offcanvas-usage-03" uk-offcanvas="overlay: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>⌨️ New website! ⌨️</h3>

                <p>We have just changed our website host 🖥️! We now have multiple websites and powerful servers for file downloads 🗂️ and more!</p>

            </div>
        </div>
        <div id="offcanvas-usage-04" uk-offcanvas="overlay: true; flip: true">
            <div class="uk-offcanvas-bar" style="border-radius: 15px;margin: 10px;">

                <button class="uk-offcanvas-close" type="button" uk-close></button>

                <h3>🖥️ Discord renew! 🖥️</h3>

                <p>Mietzchen our staff manager 😃 is currently renewing our discord server! It will have new bots 🤖 and fresh channels 🔊/📨!</p>

            </div>
        </div>
        <div class="uk-container uk-container-medium" style="padding-top: 30px;">
            <h2 class="uk-h1 uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Latest news</h2>
            <p class="uk-text-lead uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;">Sorted by release date</p>
            <div class="uk-child-width-1-2@m uk-grid-match uk-text-center uk-margin-medium-top uk-grid" data-uk-grid="" style="margin: 20px;">
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-01"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">🎉 Beta 8.0 🎉</h3>
                        <p>Beta 8.0 is coming out pretty soon! Check it out here!</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-02"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">🚧 New DDOS protection 🚧</h3>
                        <p>We have an advanced DDOS protection hosted by OVH.</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-03"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">⌨️ Our new website system! ⌨️</h3>
                        <p>Look at our new website system! Fresh and shiny (like our server)</p>
                    </div>
                </div>
                <div>
                    <div class="uk-card uk-card-default uk-box-shadow-medium uk-card-hover uk-card-body uk-inline" uk-scrollspy="cls: uk-animation-slide-bottom;" style="border-radius: 15px;">
                        <a class="uk-position-cover" uk-toggle="target: #offcanvas-usage-04"></a>
                        <h3 class="uk-card-title uk-margin uk-text-success">🖥️ Our discord server was renovated! 🖥️</h3>
                        <p>Mietzchen is currently remaking our discord server!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-container uk-container-medium" uk-scrollspy="cls: uk-animation-slide-bottom;">
            <h2 class="uk-text-center">🚧 Latest beta introduction video 🚧</h2>
            <iframe src="https://www.youtube-nocookie.com/embed/0KegdQ9T-DI?autoplay=0&amp;showinfo=0&amp;rel=0&amp;modestbranding=1&amp;playsinline=1" width="1920" height="1080" allowfullscreen uk-responsive uk-video="automute: true" style="border-radius: 15px;margin: 20px;"></iframe>
        </div>
        <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('assets/img/img1.png');border-top-left-radius: 25px;border-top-right-radius: 25px;">

            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Survival Multiplayer -> <b>SMP</b></h1>
        
        </div>
        <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('assets/img/img2.png');">

            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Citybuild -> <b>CB01</b></h1>
        
        </div>
        <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('assets/img/img3.png');">

            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Minigames</h1>
        
        </div>
        <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('assets/img/img4.png');border-bottom-left-radius: 25px;border-bottom-right-radius: 25px;">

            <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">Parkour</h1>
        
        </div>
            <div class="uk-container uk-container-medium uk-text-center" uk-scrollspy="cls: uk-animation-slide-bottom;" style="padding: 25px;">
                <h3>15 January 2020 - <b>First beta release (BV 1.0.0)</b></h3>
                <h5>The first Newdale beta was just a 1gb ram server which wasn't performing well and needed several changes!</h5>
                <hr class="uk-divider-icon">
                <h3>18 September 2021 - <b>Beta 7.0 release (BV 7.0.0)</b></h3>
                <h5>Beta 7.0 release brings custom commands and events including commands such as /tpa, /tpahere, ...</h5>
                <hr class="uk-divider-icon">
                <h3>Coming soon! - <b>Beta 8.0 release (BV 8.0.0)</b></h3>
                <h5>Beta 8.0 brings a custom resource pack to Newdale, basically bringing a completely new experience for players and staff members!</h5>
            
        
            </div>
        <div class="uk-container" style="padding: 20px;">
            <a class="twitter-timeline" data-theme="dark" href="https://twitter.com/Yumithecat_?ref_src=twsrc%5Etfw">Tweets by Yumithecat_</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>    
        <?php
        require('inc/footer.php');
        ?>

        <script src="assets/js/uikit.js"></script>
        <script src="assets/js/uikit-icons.js"></script>
        <script src="assets/js/jquery.js"></script>
        <script>
            $(document).ready(function() {
	
                setTimeout(function(){
                    $('body').addClass('loaded');
                }, 3000);
                
            });
        </script>
    </body>
</html>