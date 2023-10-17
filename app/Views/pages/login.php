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
        <form action="post" class="login-form">
            <div class="heading">Welcome Back to Haze</div>  
            <div class="input-form">
                <div class="label-name">Username</div>
                <div class="input-field">
                    <input type="text" name="username" id="username" required autocomplete="off">
                </div>
                <div class="label-name">Password</div>
                <div class="input-field">
                    <input type="password" name="password" id="password">
                </div>
                <div class="remember-me">
                    <input type="checkbox" name="remember-me" id="remember-me"> Remember me
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