<?php
    $name = 'Tommy';
    $greeting = 'Hello';

    if ($name !== '') {
        $greeting = 'Welcome back, ' . $name;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nothing</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2><?= $greeting ?></h2>
</body>
</html>