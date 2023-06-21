<?php

$categories = [
    new Category(
        1,
        'Cats',
    ),
    new Category(
        2,
        'Dogs',
    ),
];


$tastes = [
    new Taste(1, 'Chicken'),
    new Taste(2, 'Beef'),
    new Taste(3, 'Fish'),
    new Taste(4, 'Tuna'),
    new Taste(5, 'Salmon'),
    new Taste(6, 'Shrimp'),
];


$arrCards = [
    new Food(1, 'Croccantini', 'img', 2000, $categories[0], 'cibo per il tuo animale', $tastes[0], '2023-08-14', 300),
    new Food(1, 'Bocconcini', 'img', 1550, $categories[0], 'cibo per il tuo animale', $tastes[3], '2025-04-30', 300),
    new Food(1, 'Cibo in scatola', 'img', 1999, $categories[1], 'cibo per il tuo animale', $tastes[1], '2024-05-20', 300),

    new Game(1, 'Pallina', 'img', 900, $categories[1], 'gioco per il tuo animale', 'Adult', 'plastica'),
    new Game(1, 'Pallina', 'img', 850, $categories[0], 'gioco per il tuo animale', 'Adult', 'plastica'),
    new Game(1, 'Pallina', 'img', 2500, $categories[1], 'gioco per il tuo animale', 'Adult', 'plastica'),

    new Kennel(1, 'Cuccia', 'img', 15000, $categories[0], 'cuccia per il tuo animale', '200 x 150 x 250'),
    new Kennel(1, 'Cuccia', 'img', 9000, $categories[1], 'cuccia per il tuo animale', '200 x 150 x 250'),
    new Kennel(1, 'Cuccia', 'img', 5000, $categories[0], 'cuccia per il tuo animale', '200 x 150 x 250'),
];