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
                    <button onclick="hide(event, 'over')">x</button>
                </h4>
            </span>
        </div>
    <?php endif; ?>
    <?php if (!empty(session()->getFlashdata('warning'))): ?>
        <div class="back" id="back">
            <div class="warning">
                <h1>
                    <?= session()->getFlashdata('warning') ?>   
                    <button onclick="hide(event, 'back')">Close</button>
                </h1>
            </div>
        </div>
    <?php endif; ?>
</head>