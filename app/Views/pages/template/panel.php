<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/panel.css">
    <script src="../js/panel.js"></script>
    <?php if (!empty(session()->getFlashdata('message'))): ?>
        <div class="over" id="over">        
        <span class="panel">
            <h4>
                <?= session()->getFlashdata('message') ?>
                <button onclick="hide(event)">x</button>
            </h4>
        </span>
    </div>
    <?php endif; ?>
</head>