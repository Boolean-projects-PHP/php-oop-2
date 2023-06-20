<?php

class Card
{
    public function __construct(
        protected string $title,
        private int $price,
        private string $img,
        private string $category,
        private string $description,
        private string $availability,

    ) {


    }

    public function infoCard()
    {
        return $this->title . '<br>' . $this->price . '<br>' . $this->img . '<br>' . $this->category;
    }
}