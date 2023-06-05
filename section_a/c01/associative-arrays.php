<?php
    $nutrition = [
        'fat' => 40,
        'sugar' => 60,
        'salt' => 3.5,
        'protein' => 2.5,
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
    <h2>Nutrition (per 100g)</h2>
    <p>Fat: <?=$nutrition['fat']?>%</p>
    <p>Sugar: <?=$nutrition['sugar']?>%</p>
    <p>Salt: <?=$nutrition['salt']?>%</p>
    <p>Protein: <?=$nutrition['protein']?>%</p>
</body>
</html>