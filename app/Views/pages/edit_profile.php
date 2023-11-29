<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <link rel="stylesheet" href="../css/edit_profile.css">
    <script src="../js/edit_profile.js"></script>
</head>
<body>
    <?php include('template/header.php') ?>

    <div class="bungkus">
        <form action="/profile/edit/process" class="edit-form" enctype="multipart/form-data" method="post">
            <?php if (!empty(session()->getFlashdata('error'))): ?>
            <div class="alert">
                <h4><?= session()->getFlashdata('error') ?></h4>
            </div>
            <?php endif; ?>
            <h2>Edit Profile</h2>
            <div class="input-field">
                <input type="text" name="player_id" id="player_id" value="<?= $player->player_id; ?>" hidden>
            </div>
            <div class="label-name">Profile Picture</div>
            <div class="image-preview">
                <?php if ($player->profile_pic == null) : ?>
                    <img src="../img/default_user.png" alt="profile">
                <?php else : ?>                                  
                    <img src="data:image/png;base64,<?= $player->profile_pic ?>" alt="profile">
                <?php endif;  ?>
                <img id="output">
            </div>
            <div class="input-field">                
                <input type="file" name="profile_pic" id="profile_pic" class="input-image" size="20" accept="image/*" onchange="loadImage(event)">
            </div>
            <div class="label-name">Nickname</div>
            <div class="input-field">
                <input type="text" name="nickname" id="nickname" value="<?= $player->nickname; ?>">
            </div>
            <div class="label-name">Bio</div>
            <div class="input-field">
                <textarea name="bio" id="bio" cols="100%" rows="10"><?= $player->bio; ?></textarea>
            </div>
            <div class="sign-in">
                <button type="submit" class="btn-submit">Submit</button>
            </div>
        </form>
    </div>

    <?php include('template/footer.php') ?>
</body>
</html>