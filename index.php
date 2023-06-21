<?php
include_once __DIR__ . '/classes/Food.php';
include_once __DIR__ . '/classes/Game.php';
include_once __DIR__ . '/classes/Kennel.php';
include_once __DIR__ . '/classes/Category.php';
include_once __DIR__ . '/classes/Taste.php';
include __DIR__ . '/db.php';




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
        <h1 class="text-center">Bool Pet Shop</h1>
        <div class="row row-cols-3 g-3">
            <?php
            foreach ($arrCards as $Card) {
                echo $Card->structureCard();
            } ?>
        </div>
    </div>
</body>

</html>