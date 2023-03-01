<?php

use src\Poligono;
use src\poligonos\Quadrado;
use src\poligonos\Retangulo;

require __DIR__ . "/vendor/autoload.php";

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setLargura(10);
$poligono->getForma()->setAltura(5);
echo "Área do retangulo " . $poligono->getArea();

echo "<br>";

$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);
$poligono->getForma()->setAltura(5);
echo "Área do quadrado " . $poligono->getArea();
