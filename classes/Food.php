<?php


class Food extends Card
{

    public function __construct(
        public string $age,
        public string $weight,
        public string $type,
        public string $taste,
    ) {
    }


}