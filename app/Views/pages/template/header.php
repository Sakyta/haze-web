<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
</head>
<div class="head">
    <?php if (session()->has('username')) : ?>
        <div class="login-section">
            <div class="nav-prof">                
                <div class="profile-pic-head">
                    <div class="mini-profile">
                        <h4><?= $player->nickname ?></h4>
                        <?php if ($player->profile_pic == null) : ?>
                            <img src="../img/default_user.png" alt="profile">
                        <?php else : ?>
                            <img src="data:image/png;base64,<?= $player->profile_pic ?>" alt="profile">
                        <?php endif;  ?>
                    </div>
                    <div class="dropdown-child">
                        <a href="/profile">Profile</a>
                        <a href="/cart">Cart</a>
                        <a href="/logout">Log Out</a>
                    </div>
                </div>
                <!-- <div class="profile-pic-head">
                    <a href="/profile">
                        <h4><?= $player->nickname ?></h4>
                    <?php if ($player->profile_pic == null) : ?>
                        <img src="../img/default_user.png" alt="profile">
                    <?php else : ?>
                        <img src="data:image/png;base64,<?= $player->profile_pic ?>" alt="profile">
                    <?php endif;  ?>
                    </a>
                </div> -->
            </div>
        </div>
    <?php else : ?>
        <div class="login-section">
            <div class="link">
                <a href="/login">Login</a>
            </div>
            <div class="link">
                <span class="separator">|</span>
                <span style="margin-left: 10px;"><a href="/register">Sign up</a></span>
            </div>
        </div>
    <?php endif; ?>

    <nav class="navbar">
        <div class="logo">
            <a href="/dashboard"><img src="../img/Haze.png" alt="Logo"><br></a>
        </div>
        <div class="nav-links">
            <div class="link"><a href="/homepage">STORE</a></div>
            <?php if (session()->has('username')) : ?>
                <div class="link"><a href="/library">LIBRARY</a></div>
            <?php endif; ?>
            <div class="link"><a href="/about">ABOUT</a></div>
            <div class="link"><a href="">SUPPORT</a></div>
        </div>
    </nav>
</div>  