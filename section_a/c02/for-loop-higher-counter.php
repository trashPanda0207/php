<?php
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
    <h2>Prices for Large Orders</h2>
    <p>
        <?php
            for ($i = 10; $i <= 200; $i = $i + 10) {
                echo $i;
                echo ' packs cost $';
                echo $price * $i;
                echo '<br>';
            }
        ?>
    </p>
</body>
</html>