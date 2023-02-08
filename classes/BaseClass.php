<?php

class BaseClass {

    public $price;

    public function setPrice(Int $price): void
    {
        $this->price = $price;
    }

    public function getPrice(): Float
    {
        return $this->price;
    }

}