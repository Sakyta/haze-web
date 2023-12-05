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
            <form action="/topup/process">
                <div class="container">
                    <div class="nominal">Choose Nominal</div>
                    <div class="nominal-container">
                        <label>
                            <input type="radio" name="selected_nominal" value="12000">
                            <div class="nominal-button" data-nominal="12000">IDR 12,000   Haze Code</div>                        
                        </label>
                        <label>
                            <input type="radio" name="selected_nominal" value="45000">
                            <div class="nominal-button" data-nominal="45000">IDR 45,000   Haze Code</div>
                        </label>
                        <label>
                            <input type="radio" name="selected_nominal" value="60000">                        
                            <div class="nominal-button" data-nominal="60000">IDR 60,000   Haze Code</div>
                        </label>                    
                        <label>
                            <input type="radio" name="selected_nominal" value="90000">                        
                            <div class="nominal-button" data-nominal="90000">IDR 90,000   Haze Code</div>
                        </label>
                        <label>
                            <input type="radio" name="selected_nominal" value="120000">                        
                            <div class="nominal-button" data-nominal="120000">IDR 120,000 Haze Code</div>
                        </label>
                        <label>
                            <input type="radio" name="selected_nominal" value="250000">                        
                            <div class="nominal-button" data-nominal="250000">IDR 250,000 Haze Code</div>
                        </label>
                        <label>
                            <input type="radio" name="selected_nominal" value="400000">                        
                            <div class="nominal-button" data-nominal="400000">IDR 400,000 Haze Code</div>
                        </label>
                        <label>
                            <input type="radio" name="selected_nominal" value="600000">                        
                            <div class="nominal-button" data-nominal="600000">IDR 600,000 Haze Code</div>
                        </label>
                    </div>
                </div>
            </div>
    
            <div class="container">
            <div class="pilih-pembayaran">
                <div class="pilih">Choose Payment</div>
                <label>
                    <input type="radio" name="pembayaran" value="gopay">                                        
                    <div class="pilihan-pembayaran" id="gopay">
                        Gopay
                    </div>
                </label>
                <label>
                    <input type="radio" name="pembayaran" value="gopay">                                        
                    <div class="pilihan-pembayaran" id="shopeepay">
                        Shopeepay
                    </div>
                </label>
                <button type="submit" class="beli-button" onclick="handleBeli()">Beli</button>
                <!-- <a class="beli-button" href="/topup/process" onclick="handleBeli()">Beli</a> -->
            </div>
        </form>
</div>
    </div>
    <?php include("template/footer.php"); ?>
</body>

</html>