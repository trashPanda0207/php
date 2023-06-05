<?php
    $name = 'Tommy';
    $favorites = ['Maltose', 'Chocolate', 'Toffee', 'Fudge'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Echo Shorthand</title>
</head>
<body>
    <h1>The Candy Store</h1>
    <h2>Welcome <?= $name ?></h2>
    <p>Your favorite type of candy is:
        <?= $favorites[0] ?>.</p>
</body>
</html>