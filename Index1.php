<?php 

require_once("cars.php");


$ford = new Cars('red', 5, 'gazoil');
$audi = new Cars('black', 6, 'essence');

$ford->setEnergyLevel(50);
$ford->getEnergyLevel();

$ford->setNbWheels(4);
$ford->getNbWheels();

$ford->setCurrentSpeed(80);
$ford->getCurrentSpeed();

$ford->start();
$ford->forward();
echo $ford->start() . PHP_EOL;
echo $ford->forward() . PHP_EOL;

$audi->setNbWheels(4);
$audi->getNbWheels();

$audi->setEnergyLevel(5);
$audi->getEnergyLevel();

$audi->setCurrentSpeed(10);
$audi->getCurrentSpeed();

echo $audi->start();




?>