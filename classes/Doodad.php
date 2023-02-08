<?php

class Doodad extends BaseClass implements WidgetDoodad
{
    public function increasePrice(Int $percentage): Float
    {
        return $this->price * (1 + $percentage / 100);
    }
}