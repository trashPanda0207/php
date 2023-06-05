<?php
    $best_sellers = ['Chocolate', 'Mints', 'Fudge', 'Licorice', 'Bubble gum'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Best Sellers</h2>
    <ul>
        <li><?=$best_sellers[0]?></li>
        <li><?=$best_sellers[1]?></li>
        <li><?=$best_sellers[2]?></li>
        <li><?=$best_sellers[3]?></li>
        <li><?=$best_sellers[4]?></li>
    </ul>
</body>
</html>