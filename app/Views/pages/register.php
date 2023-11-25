<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/register.css">
</head>

<body>
    <?php include 'template/header.php'; ?>

    <div class="container">
        <form method="post" class="login-form" action="/register/process">
            <?php if (!empty(session()->getFlashdata('error'))): ?>
            <div class="alert">
                <h4><?= session()->getFlashdata('error') ?></h4>
            </div>
            <?php endif; ?>
            <div class="heading">Welcome to Haze</div>
            <div class="input-form">
                <div class="label-name">Nickname</div>
                <div class="input-field">
                    <input type="text" name="nickname" id="nickname" required autocomplete="off">
                </div>
                <div class="label-name">Username</div>
                <div class="input-field">
                    <input type="text" name="username" id="username" required autocomplete="off">
                </div>
                <div class="label-name">Password</div>
                <div class="input-field">
                    <input type="password" name="password" id="password">
                </div>
                <div class="sign-up">
                    <button type="submit" class="btn-submit">Sign Up</button>
                </div>
            </div>
            <div class="have">Already Have An Account?<a href="login">Sign In</a></div>
        </form>
    </div>

    <?php include 'template/footer.php' ?>
</body>

</html>