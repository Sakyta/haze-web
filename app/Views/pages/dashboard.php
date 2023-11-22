<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <title>Dashboard Page</title>
</head>

<body>
    <?php include 'template/header.php'; ?>

    <div class="background-image">
        <div class="image-content">
            <h1>Access Games Instantly</h1>
            <p> With nearly 30,000 games from AAA to indie and everything in-between. Enjoy exclusive deals, automatic
                game updates, and other great perks.</p>
        </div>
    </div>

    <div id="about_ctas_area">
        <div class="about_area_inner_wrapper">
            <div id="about_ctas">
                <div class="about_cta">
                    <div class="cta_content">
                        <h2 class="cta_title">
                            Exclusive Deals
                        </h2>
                        <div class="cta_text">
                            Unlock special discounts and exclusive offers on a wide range of games.
                        </div>
                        <div class="cta_btn" style="text-align: start;">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="cta_hero" style="overflow: hidden; position: relative; height: 170px;">
                        <img class="hero_complete" style="position: absolute; top: -120px; right: 50px" src="https://cdn.akamai.steamstatic.com/store/about/cta_hero_hardware_pt2.png?v=2">
                    </div>
                </div>

                <div class="about_cta">
                    <div class="cta_hero" stlye="overflow: hidden; position: relative; height: 80px;">
                        <img class="hero_complete" style="position: absolute; top: 600px; right: 855px;" width="400px" src="https://cdn.akamai.steamstatic.com/store/about/cta_hero_steamworks_pt1.png">
                    </div>
                    <div class="cta_content">
                        <h2 class="cta_title">
                            Explore and Purchase Games
                        </h2>
                        <div class="cta_text">
                            Discover a vast collection of games from various genres. Browse through a curated selection
                            of AAA titles and indie gems. Purchase and own your favorite games to build your gaming library.
                        </div>
                        <div class="cta_btn" style="text-align: start;">
                            <a href="#">Explore Games</a>
                        </div>
                    </div>
                </div>

                <div class="about_cta">
                    <div class="cta_content">
                        <h2 class="cta_title">
                            Automatic Updates
                        </h2>
                        <div class="cta_text">
                            Enjoy hassle-free gaming with automatic updates for all your purchased games.
                        </div>
                        <div class="cta_btn" style="text-align: start;">
                            <a href="#">Learn More</a>
                        </div>
                    </div>
                    <div class="cta_hero">
                        <img class="hero_complete" src="https://cdn.akamai.steamstatic.com/store/about/cta_hero_hardware_pt1.png?v=2">
                    </div>
                </div>  
            </div>
        </div>
    </div>

    <div id="about_steam_features_area">
        <div class="about_area_inner_wrapper">
            <div id="about_steam_features">
                <h1 id="about_steam_feature_title" style="margin-top: 50px;">
                    Features </h1>
                <div id="about_steam_feature_subtitle">
                    We are constantly working to bring new updates and features to Haze, such as: </div>
                <div id="about_steam_features_grid" class="features_grid">

                    <div id="about_feature_gamehubs" class="feature">
                        <div class="about_feature_icon">
                            <img src="https://cdn.akamai.steamstatic.com/store/about/icon-gamehubs.svg">
                        </div>
                        <div class="about_feature_content">
                            <h3 class="feature_title">
                                Game Hubs </h3>
                            <div class="feature_text">
                                Everything about your game, all in one place. Join discussions, upload content, and
                                be the first to know about new updates. </div>
                        </div>
                    </div>

                    <div id="about_feature_steammobile" class="feature">
                        <div class="about_feature_icon">
                            <img src="https://cdn.akamai.steamstatic.com/store/about/icon-steammobile.svg">
                        </div>
                        <div class="about_feature_content">
                            <h3 class="feature_title">
                                Available on Mobile </h3>
                            <div class="feature_text">
                                Access Haze anywhere from your iOS or Android device with the Haze mobile app.
                            </div>
                        </div>
                    </div>

                    <div id="about_feature_earlyaccess" class="feature">
                        <div class="about_feature_icon">
                            <img src="https://cdn.akamai.steamstatic.com/store/about/icon-earlyaccess.svg">
                        </div>
                        <div class="about_feature_content">
                            <h3 class="feature_title">
                                Early Access</h3>
                            <div class="feature_text">
                                Discover, play, and get involved with games as they evolve. Be the first to see
                                what's coming and become part of the process. </div>
                        </div>
                    </div>


                    <div id="about_feature_languages" class="feature">
                        <div class="about_feature_icon">
                            <img src="https://cdn.akamai.steamstatic.com/store/about/icon-languages.svg">
                        </div>
                        <div class="about_feature_content">
                            <h3 class="feature_title">
                                Multilingual </h3>
                            <div class="feature_text">
                                Creating a global community is important to us, that's why our client supports 28
                                languages and counting. </div>
                        </div>
                    </div>
                    <div id="about_feature_payment" class="feature">
                        <div class="about_feature_icon">
                            <img src="https://cdn.akamai.steamstatic.com/store/about/icon-payment.svg">
                        </div>
                        <div class="about_feature_content">
                            <h3 class="feature_title">
                                Easy Purchase </h3>
                            <div class="feature_text">
                                Our storefront supports 100+ payment methods across over 35 currencies, giving you the
                                flexibility to pay how you want. </div>
                        </div>
                    </div>
                    <div id="about_feature_controllers" class="feature">
                        <div class="about_feature_icon">
                            <img src="https://cdn.akamai.steamstatic.com/store/about/icon-controllers.svg">
                        </div>
                        <div class="about_feature_content">
                            <h3 class="feature_title">
                                Controller Support </h3>
                            <div class="feature_text">
                                Haze encourages developers to include controller support in their games including
                                PlayStation, Xbox, and Nintendo controllers. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'template/footer.php'; ?>
</body>