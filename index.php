<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truk.php';

$bike = new Bicycle('red', 2);
$bike->setCurrentSpeed(15);

$car = new Car('green', 4, 'electric');

$truk = new Truk('Yellow', 6, 'fuel', 'full');

// bike forward

echo 'Le vélo : ' .$bike->getColor(). '<br>';
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo '<hr>';
// Car forward

echo 'La voiture : ' .$car->getColor(). '<br>';
echo $car->forward();
echo $car->moreFast();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $car->brake();
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo '<hr>';
// truk forward

echo 'Le camion : ' .$truk->getColor(). 'est : '. $truk->getLading() .'<br>';
echo $truk->forward();
echo $truk->moreFast();
echo '<br> Vitesse du camion : ' . $truk->getCurrentSpeed() . ' km/h' . '<br>';
echo $truk->brake();
echo '<br> Vitesse du camion : ' . $truk->getCurrentSpeed() . ' km/h' . '<br>';
echo '<hr>';

?>
