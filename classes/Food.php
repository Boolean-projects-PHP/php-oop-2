<?php


class Food extends Card
{

    public function __construct(
        private string $age,
        private string $weight,
    ) {
    }


}