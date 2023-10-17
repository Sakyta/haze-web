<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            background: #191a19;
        }

        h1 {
            background-color: #313331;
            padding: 7px;
            border: 1px solid black;
            border-radius: 10px;
        }

        .custom-carousel {
            display: flex;
            overflow-x: visible;
            width: 100%;

        }

        .item {
            flex: 0 0 auto;
            width: 400px;
            height: 400px;
            margin-right: 10px;
            background-size: cover;
            background-position: center;
            border-radius: 10px;
            cursor: pointer;
        }

        .item.active {
            border: 2px solid #3498db;
        }
    </style>
</head>

<body>
    <?php include 'template/header.php';?>
    
    <h1>Discover A Game</h1>
    <div class="custom-carousel">
        <div class="item" style="
          background-image: url(https://ucarecdn.com/75d7700d-c102-40ff-9ba1-f0641444c616/dota2.jpg);
        "></div>
        <div class="item" style="
          background-image: url(https://ucarecdn.com/2a5f69bc-befa-49f4-acc6-ab1dcae514c7/winter3.jpg);
        "></div>
        <div class="item" style="
          background-image: url(https://ucarecdn.com/ec1918b1-2674-452c-bf61-8f73d8cc40c6/rdr2.jpg);
        "></div>
        <div class="item" style="
          background-image: url(https://rare-gallery.com/thumbnail/1328261-Yuito-SumeragiScarlet-Nexus-HD-Wallpaper.png);
        "></div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const items = document.querySelectorAll(".item");
            items.forEach((item) => {
                item.addEventListener("click", function() {
                    items.forEach((i) => i.classList.remove("active"));
                    this.classList.toggle("active");
                });
            });
        });
        </script>
    
    <?php include 'template/footer.php';?>
</body>

</html>