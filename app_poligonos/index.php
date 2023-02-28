<?php

use src\Quadrado;
use src\Retangulo;

require __DIR__ . "/vendor/autoload.php";

$retangulo = new Retangulo;
$retangulo->setLargura(10);
$retangulo->setAltura(4);
echo "Área do retangulo " . $retangulo->getArea();

echo "<br>";

$quadrado = new Quadrado;
$quadrado->setLargura(10);
$quadrado->setAltura(4);
echo "Área do quadrado " . $quadrado->getArea();
