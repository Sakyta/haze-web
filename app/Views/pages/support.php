<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Support</title>
    <link rel="stylesheet" href="../css/support.css">
</head>

<body>
    <?php include("template/header.php"); ?>
    <div class="main">
        <div class="help">
            What do you need help with, <?= $player->nickname ?>?
        </div>
        <div class="recent-product">
            Recent products
        </div>
        <?php $counter = 0 ?>
        <?php foreach ($games as $row) : ?>
            <?php $counter++ ?>
            <div class="additional-box">
                <img src="data:image/png;base64, <?= $row['game_pic'] ?>" alt="" width="50" height="50">
                <p><?= $row['game_name'] ?></p>
                <div class="triangle"></div>
            </div>
            <?php 
            if ($counter == 3)
            {
                break;
            }
            ?>
        <?php endforeach; ?>
        <div class="persegi"> </div>
        <a class="additional-box" href="/myAccount">
            <p>My Account</p>
            <div class="triangle"></div>
        </a>
        <a class="additional-box" href="">
            <p>Haze Wallet</p>
            <div class="triangle"></div>
        </a>
    </div>

    <?php include("template/footer.php"); ?>
</body>

</html>