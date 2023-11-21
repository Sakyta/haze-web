<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="icon" href="../img/Haze.png">
    <link rel="stylesheet" href="../css/homepage.css">
</head>

<body>
    <?php include 'template/header.php'; ?>

    <div class="slider">
        <h4>News</h4>
        <input type="radio" name="choose" id="" class="choose_1">
        <input type="radio" name="choose" id="" class="choose_2">
        <div class="slides">
            <a href="" class="slide s1">
                <img src="../img/game/slide1.png" alt="" width="600" height="300">
            </a>
            <a href="" class="slide">
                <img src="../img/game/slide2.png" alt="" width="600" height="300">
            </a>
        </div>
    </div>


    <div class="game-section">
        <h1>Game Of The Year Nominees</h1>
        <section class="populer">
            <div class="item">
                <a href="/games">
                    <img src="../img/game/alanwake2.png" alt="" width="300" height="300">
                    <div class="judul">Alan Wake II</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/baldursgate3.png" alt="" width="300" height="300">
                    <div class="judul">Baldurs Gate 3</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/spiderman2.png" alt="" width="300" height="300">
                    <div class="judul">Marvel : Spider-man 2</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/re4.png" alt="" width="300" height="300">
                    <div class="judul">Resident Evil 4 Remake</div>
                </a>
            </div>
        </section>
    </div>

    <div class="game-section">
        <h1>Game List</h1>
        <section class="populer">
            <div class="item">
                <a href="/games">
                    <img src="../img/game/genshin.png" alt="" width="300" height="300">
                    <div class="judul">Genshin Impact</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/mhw.png" alt="" width="300" height="300">
                    <div class="judul">Monster Hunter: World</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/gowr.png" alt="" width="300" height="300">
                    <div class="judul">God of War Ragnarök</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/fishing.png" alt="" width="300" height="300">
                    <div class="judul">Fishing Planet</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/scarlet.png" alt="" width="300" height="300">
                    <div class="judul">Scarlet Nexus</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/phasmo.png" alt="" width="300" height="300">
                    <div class="judul">Phasmophobia</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/unbound.png" alt="" width="300" height="300">
                    <div class="judul">A Space For The Unbound</div>
                </a>
            </div>
            <div class="item">
                <a href="/games">
                    <img src="../img/game/nier.png" alt="" width="300" height="300">
                    <div class="judul">Nier: Automata</div>
                </a>
            </div>
        </section>
    </div>

    <?php include 'template/footer.php'; ?>
</body>

</html>