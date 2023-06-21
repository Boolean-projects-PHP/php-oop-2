<?php
include __DIR__ . '/classes/Card.php';
include __DIR__ . '/classes/Food.php';
include __DIR__ . '/classes/Game.php';
include __DIR__ . '/classes/Kennel.php';
include __DIR__ . '/classes/Material.php';
include __DIR__ . '/classes/Taste.php';
include __DIR__ . '/classes/Type.php';
include __DIR__ . '/classes/Category.php';
include __DIR__ . '/classes/Product.php';
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
        <?php

        foreach ($arrCards as $index => $card) { ?>
            <br>
            <div>

                <div><img src="images/<?= $card->img ?>"></div>
                <div>
                    <?= $card->title ?>
                </div>
                <div>
                    <?= $card->price ?>
                </div>

                <div>
                    <?php
                    foreach ($card->category as $category) { ?>
                        <div>
                            <?= $category->name ?>
                        </div>
                    <?
                    } ?>
                </div>
                <div>
                    <?= $card->description ?>
                </div>
                <div>
                    <?= $card->availability ?>
                </div>

            </div>
            <br>
            <?php
        } ?>
    </div>
</body>

</html>