<?php
    $counter = 1;
    $packs = 10;
    $price = 1.99;
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
            while ($counter < $packs) {
                echo $counter;
                echo ' packs cost ';
                echo $price * $counter;
                echo '<br>';
                $counter++;
            }
        ?>
    </p>
</body>
</html>