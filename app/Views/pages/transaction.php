<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/transaction.css">
    <title>Detail Transaksi</title>
</head>
<body>
    <?php include 'template/header.php'; ?>

    <div class="papan">        
        <h2>Detail Transaksi</h2>
        <div class="informasi">
            <?php foreach ($transaction as $row) : ?>
            <div class="id-transaksi">
                <h3>Transaction ID</h3>
                <p><?= $row['transaction_id'] ?></p>
            </div>
            <div class="tanggal">
                <h3>Date</h3>
                <p><?= $row['transaction_date'] ?></p>
            </div>
            <?php break; endforeach; ?>
        </div>
        <?php $no = 1; ?>
        <table class="data">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga</th>
            </tr>
            <?php foreach ($transaction as $row) : ?>
                <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['game_name'] ?></td>
                <td>Rp <?= number_format($row['price']) ?></td>
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="2">
                    Subtotal
                </td>
                <?php foreach ($transaction as $row) : ?>
                <td>
                    Rp <?= number_format($row['subtotal']) ?>
                </td>
                <?php break; endforeach; ?>
            </tr>   
        </table>
        <div class="utas">
            <a href="/library" class="confirm">Confirm</a>
        </div>
    </div>

    <?php include 'template/footer.php'; ?>
</body>
</html>