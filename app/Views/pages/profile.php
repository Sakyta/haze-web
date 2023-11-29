<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $player->nickname ?> Profile</title>
    <link rel="stylesheet" href="../css/profile.css">
</head>
<body>
    <?php include("template/header.php"); ?>

    <div class="bungkus">
        <div class="profile-card">
            <div class="profile-pic">
                <?php if ($player->profile_pic == null) : ?>
                    <img src="../img/default_user.png" alt="profile">
                <?php else : ?>                    
                    <img src="data:image/png;base64,<?= $player->profile_pic ?>" alt="profile">
                <?php endif;  ?>
                <a href="/profile/edit">Edit Profile</a>
            </div>
            <div class="info-player">
                <div class="nickname">
                    <?= $player->nickname ?>
                </div>
                <div class="bio">
                    <p><?= $player->bio ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php include('template/footer.php') ?>
</body>
</html>