<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>
    <link rel="stylesheet" href="../css/account.css">
</head>

<body>
    <?php include("template/header.php"); ?>
    <div class="main">
        <div class="title">
            <h1><?= $player->nickname ?>'s Account</h1>
            Player ID : <?= $player->player_id ?>
        </div>
        <div class="wallet-box">
            <div class="wallet-title">
                My Haze Wallet
            </div>
            <p>Haze Wallet Balance : <?= $player->haze_wallet ?></p>
            <a class="wallet" href="">+Add funds to your Haze Wallet</a>
        </div>
        <div class="persegi"> </div>
        <div class="delete-box">
            <a class="delete" href="">Delete My Haze Account</a>
        </div>
    </div>

    <?php include("template/footer.php"); ?>
</body>

</html>