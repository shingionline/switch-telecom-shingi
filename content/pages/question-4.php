<h3>Question 4</h3>

<?php
require 'classes\PriceIncreasingService.php';
require 'classes\BaseClass.php';
require 'classes\Widget.php';
require 'classes\Doodad.php';

interface WidgetDoodad
{
    public function increasePrice(Int $percentage);
}

$object = new Widget();

$price = 100;
$increment = 10;

echo get_class($object) . ' price is: ' . $price . "<br>";
$object->setPrice($price);

$service = new PriceIncreasingService();

echo get_class($object) . ' price after ' . $increment . '% increase is: ' . $service->increasePrice($object, $increment) . "<br>";

echo "<hr size='1'>";

$object = new Doodad();

$price = 200;
$increment = 15;

echo get_class($object) . ' price is: ' . $price . "<br>";
$object->setPrice($price);

$service = new PriceIncreasingService();

echo get_class($object) . ' price after ' . $increment . '% increase is: ' . $service->increasePrice($object, $increment) . "<br>";

?>