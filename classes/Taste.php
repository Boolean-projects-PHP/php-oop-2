<?php

class Taste
{
    public function __construct(
        protected int $id,
        protected string $name,
    ) {

    }
    public function writeName()
    {
        return $this->name;
    }
}