<?php


class Game extends Card
{

    public function __construct(
        public string $age,
        public string $material,
        public string $dimension,
        public string $type,

    ) {
    }


}