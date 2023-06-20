<?php
include __DIR__ . '/classes/Card.php';
include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Game.php';
include __DIR__ . '/db.php';

$card = new Card('title', 20, 'img', 'category');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp"
        crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="products">
            <div class="game_product">

            </div>

            <div class="food_product">

            </div>
        </div>

</body>

</html>