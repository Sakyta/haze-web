<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="icon" href="../img/Haze.png">
    <link rel="stylesheet" href="../css/library.css">
    <script>
        function showOverlay(element) {
            const overlay = element.querySelector('.overlay');
            if (overlay.style.opacity !== '1') {
                overlay.style.opacity = 1;
            }
        }

        function hideOverlay(element) {
            const overlay = element.querySelector('.overlay');
            if (overlay.style.opacity !== '0') {
                overlay.style.opacity = 0;
            }
        }
    </script>
</head>

<body>
    <?php include("template/header.php"); ?>

    <div class="s">
        <h2>Game Library</h2>
        <label for="sort">Sort By :
            <select name="sorting" id="sorting">
                <option value="most">Name</option>
                <option value="favorite">Hours Play</option>
            </select>
        </label>
    </div>

    <div class="game-section">
        <?php if (!empty($games)) : ?>
            <section class="populer">
                <?php foreach ($games as $row) : ?>
                    <div class="item" onmouseover="showOverlay(this)" onmouseout="hideOverlay(this)">
                        <a href="/games/<?= $row->game_id ?>">
                            <img src="data:image/png;base64, <?= $row->game_pic ?>" alt="" width="300" height="300">
                            <div class="overlay">
                                <div class="detail">
                                    <div class="title"><?= $row->game_name ?></div>
                                    <div class="hours">8.10 Hours</div>
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

    <!-- <a href="/delete">Delete Profile</a> -->

    <?php include("template/footer.php"); ?>
</body>

</html>