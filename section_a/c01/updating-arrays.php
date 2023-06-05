<?php
    $nutrition = [
        'fat' => 38,
        'sugar' => 51,
        'salt' => 0.25,
    ];
    $nutrition['fat'] = 36;
    $nutrition['fiber'] = 2.1;
    $nutrition['protein'] = 7.3;
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
    <h2>Nutrition (per 100g)</h2>
    <p>Fat: <?=$nutrition['fat']?>%</p>
    <p>Sugar: <?=$nutrition['sugar']?>%</p>
    <p>Salt: <?=$nutrition['salt']?>%</p>
    <p>Fiber: <?=$nutrition['fiber']?>%</p>
    <p>Protein: <?=$nutrition['protein']?>%</p>
</body>
</html>