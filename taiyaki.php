<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>ありがとうございました。</p>

    <?php
    // 商品代
    $total = 150 * $_POST["num"];
    //おつり
    $change = $_POST["coin"] - $total;
    ?>
    
    <p>商品代：<?php print($total); ?>円</p>
    <p>おつり：<?php print($change); ?>円</p>

    <?php
    //おつり枚数の計算
    //500円玉の個数
    $coin500 = floor($change / 500);
    $change -= 500 * $coin500;
    // 100円玉の個数
    $coin100 = floor($change / 100);
    $change -= 100 * $coin100;
    // 50円玉の個数
    $coin50 = floor($change / 50);
    $change -= 50 * $coin50;
    // 10円玉の個数
    $coin10 = floor($change / 10);
    $change -= 10 * $coin10;
    // 5円玉の個数
    $coin5 = floor($change / 5);
    $change -= 5 * $coin5;
    ?>

    <p>500円玉:<?php print($coin500) ?>枚</p>
    <p>100円玉:<?php print($coin100) ?>枚</p>
    <p>50円玉:<?php print($coin50) ?>枚</p>
    <p>10円玉:<?php print($coin10) ?>枚</p>
    <p>5円玉:<?php print($coin5) ?>枚</p>
    <p>1円玉:<?php print($change) ?>枚</p>

    <p><a href="taiyaki2.html">もどる</a></p>
</body>
</html>