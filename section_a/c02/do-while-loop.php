<?php
    $packs = 10;
    $price = 2.99;
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
    <h2>Prices for Multiple Packs</h2>
    <p>
        <?php
            do {
                echo $packs;
                echo ' packs cost ';
                echo $price * $packs;
                echo '<br>';
                $packs--;
            } while ($packs > 0);
        ?>
    </p>
</body>
</html>