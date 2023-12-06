<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="icon" href="../img/Haze.png">
    <link rel="stylesheet" href="../css/library.css">
    <script src="../js/library.js"></script>
</head>

<body>
    <?php include("template/header.php"); ?>

    <div class="s">
        <h1>Game Library</h1>
        <label for="sort">Sort By :
            <select name="sorting" id="sorting">
                <option value="default">Default</option>
                <option value="name">Name</option>
            </select>
        </label>
    </div>

    <div class="game-section">
        <?php if (!empty($games)) : ?>
            <section class="populer" id="section">
                <?php foreach ($games as $row) : ?>
                    <div class="item" onmouseover="showOverlay(this)" onmouseout="hideOverlay(this)">
                        <a href="/games/<?= $row['game_id'] ?>">
                            <img src="data:image/png;base64, <?= $row['game_pic'] ?>" alt="" width="300" height="300">
                            <div class="overlay">
                                <div class="detail">
                                    <div class="title"><?= $row['game_name'] ?></div>
                                    <div class="hours"><?= $row['total_playtime'] ?> Hours</div>
                                    <div class="button"><button>Play</button></div>
                                </div>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </section>
        <?php else : ?>
            <h3>You have no game</h3>
        <?php endif; ?>
    </div>

    <?php include("template/footer.php"); ?>
</body>

</html>