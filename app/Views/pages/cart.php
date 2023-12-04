<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cart.css">
    <title>Dashboard Page</title>
</head>

<body>
    <?php include 'template/header.php'; ?>
    
    <div class="container">
        <div class="title">
            <div>YOUR SHOPPING CART</div>
        </div>
        <?php $total = 0 ?>
        <table>
        <?php if ($cart) : ?>
            <?php foreach ($cart as $row): ?>            
                <?php $total += $row['price'] ?>                
                <tr>
                    <td class="satu"><img src="data:image/png;base64, <?= $row['game_pic'] ?>" alt=""></td>
                    <td class="dua"><?= $row['game_name'] ?></td>
                    <td class="tiga">Rp <?= $row['price'] ?></td>
                    <td class="empat"><a href="/remove/<?= $row['cart_id'] ?>" class="apus">Delete</a></td>
                </tr>                            
            <?php endforeach; ?>
                <tr>                    
                    <td class="tombol" colspan="2">
                        <a class="beli" href='/buy'>Buy</a>
                    </td>
                    <td class="harga" colspan="2">Rp <?= $total ?></td>
                </tr>
            <?php else : ?>
                <tr>
                    <td>Cart is Empty!</td>
                </tr>
        <?php endif; ?>
        </table>
    </div>

    <?php include 'template/footer.php'; ?>
</body>