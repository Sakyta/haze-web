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
            <div class="link">
                <a href="/logout">Log Out</a>
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
            <div class="link"><a href="/about">ABOUT</a></div>
            <div class="link"><a href="">SUPPORT</a></div>
        </div>
    </nav>
</div>  