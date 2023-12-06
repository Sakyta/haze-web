<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <?php include 'template/header.php'; ?>

    <div class="container">
        <form action="/login/process" method="post" class="login-form">
            <?php if (!empty(session()->getFlashdata('error'))) : ?>
                <div class="alert">
                    <h4><?= session()->getFlashdata('error') ?></h4>
                </div>
            <?php endif; ?>
            <div class="heading">Welcome Back to Haze</div>
            <div class="input-form">
                <div class="label-name">Username</div>
                <div class="input-field">
                    <input type="text" name="username" id="username" required autocomplete="off" value="<?= isset($_COOKIE["loginId"]) ? $_COOKIE["loginId"] : '' ?>">
                </div>
                <div class="label-name">Password</div>
                <div class="input-field">
                    <input type="password" name="password" id="password" value="<?= isset($_COOKIE["loginPass"]) ? $_COOKIE["loginPass"] : '' ?>">
                </div>
                <div class="remember-me">
                    <input type="checkbox" name="remember-me" id="remember-me" <?= isset($_COOKIE["loginId"]) ? 'checked' : '' ?>> Remember me
                </div>
                <div class="sign-in">
                    <button type="submit" class="btn-submit">Sign In</button>
                </div>
            </div>
            <div class="dont-have">Don't Have An Account?<a href="register">Sign Up</a></div>
        </form>
    </div>

    <?php include 'template/footer.php' ?>
</body>

</html>