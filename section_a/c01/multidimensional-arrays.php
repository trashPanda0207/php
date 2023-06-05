<?php
    $offers = [
        ['name' => 'Toffee', 'price' => 5, 'stock' => 120,],
        ['name' => 'Mints', 'price' => 3, 'stock' => 66,],
        ['name' => 'Fudge', 'price' => 4, 'stock' => 97,],
        ['name' => 'Chocolate', 'price' => 2, 'stock' => 83,],
    ];
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
    <h2>Offers</h2>
    <p><?=$offers[0]['name']?> - $<?=$offers[0]['price']?></p>
    <p><?=$offers[1]['name']?> - $<?=$offers[1]['price']?></p>
    <p><?=$offers[2]['name']?> - $<?=$offers[2]['price']?></p>
    <p><?=$offers[3]['name']?> - $<?=$offers[3]['price']?></p>
</body>
</html>