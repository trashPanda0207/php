<?php
    $perfix = "Thank you";
    $name = "Tommy";
    $message = "$perfix, $name.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Operator</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $name ?>'s order</h2>
    <p><?= $message ?></p>
</body>
</html>