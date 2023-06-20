<?php

class Card
{
    public function __construct(
        public string $img,
        public string $title,
        public int $price,
        public string $category,

    ) {


    }

    public function infoCard()
    {
        return $this->img . '<br>' . $this->title . '<br>' . $this->price . '<br>' . $this->category;
    }
}