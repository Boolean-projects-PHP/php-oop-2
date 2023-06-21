<?php

class Card
{
    public function __construct(
        protected int $id,
        protected string $name,
        protected string $img,
        protected int $price,
        protected Category $category,
        protected string $description,
    ) {

    }
    public function getFormattedPrice()
    {
        return $this->price / 100 . ' €';
    }



}