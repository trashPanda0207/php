<?php
    $products = [
      'Toffee' => 2.99,
      'Mints' => 1.99,
      'Fudge' => 3.49,
      'Weeds' => 5.99,
      'Tabacco' => 6.39,
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
    <h2>Price list</h2>
    <table>
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php foreach ($products as $item => $price) { ?>
            <tr>
                <td><?= $item ?></td>
                <td><?= $price ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>