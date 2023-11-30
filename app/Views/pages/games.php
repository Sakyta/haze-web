<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games</title>
    <link rel="stylesheet" href="../css/games.css">
    <script src="../js/games.js"></script>
</head>
<body>
    <?php include("template/header.php"); ?>

    <div class="main">
        <div class="slideshow">
            <div class="display">
                <div class="title"><?= $games->game_name ?></div>
                <img alt="" id="output">
            </div>
            <div class="preview">
                <div class="pre">Preview</div>
                <div class="tengah"></div>
                <div class="col">
                    <img src="data:image/png;base64, <?= $pic->game_pic_1 ?>" alt="" id="preview-1" onclick="previewImage(event, 'preview-1')">
                    <img src="data:image/png;base64, <?= $pic->game_pic_2 ?>" alt="" id="preview-2" onclick="previewImage(event, 'preview-2')">
                </div>
                <div class="col">
                    <img src="data:image/png;base64, <?= $pic->game_pic_3 ?>" alt="" id="preview-3" onclick="previewImage(event, 'preview-3')">
                    <img src="data:image/png;base64, <?= $pic->game_pic_4 ?>" alt="" id="preview-4" onclick="previewImage(event, 'preview-4')">
                </div>
            </div>
        </div>
        <div class="foo">
            <div class="left">
                <div class="info-game">
                    <p><?= $games->game_description ?></p>
                </div>
            </div>
            <div class="right">
                <div class="price">
                    <h3>Rp <?= $games->price ?> <a href="">Add to Cart</a></h3>
                </div>
                <div class="info">
                    <p>Rating : <?= $games->rating ?>/10</p>
                    <p>Release Date : <?= $games->release_date ?></p>
                    <p>Developer : <?= $games->developer ?></p>
                    <p>Publisher : <?= $games->publisher ?></p>
                </div>
            </div>
        </div>
    </div>

    <?php include("template/footer.php"); ?>
</body>
</html>