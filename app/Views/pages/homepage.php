<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="icon" href="../img/Haze.png">
    <link rel="stylesheet" href="../css/homepage.css">
    <script src="../js/homepage.js"></script>
</head>

<body>
    <?php include 'template/header.php'; ?>

    <div class="slider">
        <h3>News</h3>
        <div class="mySlides">
            <img src="../img/game/slide1.png" alt="" width="600" height="300">
        </div>
        <div class="mySlides">
            <img src="../img/game/slide2.png" alt="" width="600" height="300">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>


    <div class="game-section">
        <h1>Game Of The Year Nominees</h1>
        <section class="populer">
            <?php foreach ($games as $row) : ?>
                <?php if ($row->game_id == "SGNLK") : ?>
                    <div class="item">
                        <a href="/games/<?= $row->game_id ?>">
                            <img src="data:image/png;base64, <?= $row->game_pic ?>" alt="" width="300" height="300">
                            <div class="judul"><?= $row->game_name ?></div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($row->game_id == "JUOIG") : ?>
                    <div class="item">
                        <a href="/games/<?= $row->game_id ?>">
                            <img src="data:image/png;base64, <?= $row->game_pic ?>" alt="" width="300" height="300">
                            <div class="judul"><?= $row->game_name ?></div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($row->game_id == "SFNJK") : ?>
                    <div class="item">
                        <a href="/games/<?= $row->game_id ?>">
                            <img src="data:image/png;base64, <?= $row->game_pic ?>" alt="" width="300" height="300">
                            <div class="judul"><?= $row->game_name ?></div>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($row->game_id == "UIEFS") : ?>
                    <div class="item">
                        <a href="/games/<?= $row->game_id ?>">
                            <img src="data:image/png;base64, <?= $row->game_pic ?>" alt="" width="300" height="300">
                            <div class="judul"><?= $row->game_name ?></div>
                        </a>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>
    </div>

    <div class="game-section">
        <h1>Game List</h1>
        <section class="populer">
            <?php foreach ($games as $row) : ?>
                <div class="item">
                    <a href="/games/<?= $row->game_id ?>">
                        <img src="data:image/png;base64, <?= $row->game_pic ?>" alt="" width="300" height="300">
                        <div class="judul"><?= $row->game_name ?></div>
                    </a>
                </div>
            <?php endforeach; ?>
        </section>
    </div>

    <?php include 'template/footer.php'; ?>
</body>

</html>