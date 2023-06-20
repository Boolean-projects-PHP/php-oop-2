<?php

class Kennel extends Card
{
    private function __construct(
        private string $material,
        private string $dimension,
        private array $type,
    ) {
    }
}