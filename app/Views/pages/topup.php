<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Top Up</title>
    <link rel="stylesheet" href="../css/topup.css">
    <script src="../js/topup.js"></script>
</head>

<body>
    <?php include("template/header.php"); ?>
    <div class="main">
        <div class="topup">
            Top Up Haze Wallet
        </div>
        <div class="container-wrapper">
            <div class="container">
                <div class="nominal">Choose Nominal</div>
                <div class="nominal-container">
                    <div class="nominal-button" data-nominal="12000">IDR 12,000   Haze Code</div>
                    <div class="nominal-button" data-nominal="45000">IDR 45,000   Haze Code</div>
                    <div class="nominal-button" data-nominal="60000">IDR 60,000   Haze Code</div>
                    <div class="nominal-button" data-nominal="90000">IDR 90,000   Haze Code</div>
                    <div class="nominal-button" data-nominal="120000">IDR 120,000 Haze Code</div>
                    <div class="nominal-button" data-nominal="250000">IDR 250,000 Haze Code</div>
                    <div class="nominal-button" data-nominal="400000">IDR 400,000 Haze Code</div>
                    <div class="nominal-button" data-nominal="600000">IDR 600,000 Haze Code</div>
                </div>
            </div>
        </div>

        <div class="container">
        <div class="pilih-pembayaran">
            <div class="pilih">Choose Payment</div>
            <div class="pilihan-pembayaran" id="gopay">
                Gopay
            </div>
            <div class="pilihan-pembayaran" id="shopeepay">
                Shopeepay
            </div>
            <a class="beli-button" href="javascript:void(0);" onclick="handleBeli()">Beli</a>

        </div>
</div>
    </div>
    <?php include("template/footer.php"); ?>
</body>

</html>