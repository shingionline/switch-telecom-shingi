<?php

class PriceIncreasingService
{
    public function increasePrice(WidgetDoodad $object, Int $percentage): Float
    {
        return $object->increasePrice($percentage);
    }
}

