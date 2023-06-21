<?php

$arrTastes = [
    new Taste('Chicken', 'descrizione'),
    new Taste('Beef', 'descrizione'),
    new Taste('Fish', 'descrizione'),
    new Taste('Tuna', 'descrizione'),
    new Taste('Salmon', 'descrizione'),
    new Taste('Shrimp', 'descrizione'),
];

$arrTypes = [
    new Type('Chewing', 'description'),
    new Type('Fetching', 'description'),
    new Type('Puzzle', 'description'),
    new Type('Swatting', 'description'),
    new Type('Jumping', 'description'),
];

$arrMaterials = [
    new Material('Plastic', 'description'),
    new Material('Wood', 'description'),
    new Material('Fabric', 'description'),
];

$arrProducts = [
    new Product('food'),
    new Product('game'),
    new Product('kennel'),
];




$arrCategories = [
    new Category('dog'),
    new Category('cat'),
];

$dataCards = [
    [
        'title' => 'Card 1',
        'price' => 20,
        'img' => 'food1.jpg',
        'category' => [1],
        'taste' => [2, 3, 4],
        'description' => 'Premium dog food for all breeds',
        'availability' => 'In stock'
    ],
    [
        'title' => 'Card 2',
        'price' => 20,
        'img' => 'food2.jpg',
        'category' => [0],
        'taste' => [0, 1],
        'description' => 'Premium dog food for all breeds',
        'availability' => 'In stock'
    ],
    [
        'title' => 'Card 3',
        'price' => 20,
        'img' => 'food3.jpg',
        'category' => [0],
        'taste' => [0],
        'description' => 'Premium dog food for all breeds',
        'availability' => 'In stock'
    ],
    [
        'title' => 'Card 4',
        'price' => 20,
        'img' => 'food4.jpg',
        'category' => [1],
        'taste' => [2, 4],
        'description' => 'Premium dog food for all breeds',
        'availability' => 'In stock'
    ],
    [
        'title' => 'Card 5',
        'price' => 20,
        'img' => 'food5.jpg',
        'category' => [0],
        'taste' => [1],
        'description' => 'Premium dog food for all breeds',
        'availability' => 'In stock'
    ],
];

$arrCards = [];
foreach ($dataCards as $card) {
    $cardCategories = [];
    foreach ($card['category'] as $index) {
        $cardCategories[] = $arrCategories[$index];
    }

    $arrCards[] = new Card(
        $card['title'],
        $card['price'],
        $card['img'],
        $cardCategories,
        $card['description'],
        $card['availability'],
    );
}

// var_dump($arrCards);