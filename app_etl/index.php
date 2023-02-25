<?php

use src\Leitor;

require __DIR__ . "/vendor/autoload.php";

//------------------ TXT
$leitorTXT = new Leitor();
$leitorTXT->setDiretorio(__DIR__.'/arquivos');
$leitorTXT->setArquivo('dados.txt');
$arrayTXT = $leitorTXT->lerArquivo();

//------------------ CSV

$leitorCSV = new Leitor();
$leitorCSV->setDiretorio(__DIR__.'/arquivos');
$leitorCSV->setArquivo('dados.csv');
$arrayCSV = $leitorCSV->lerArquivo();

//------------------ Merge entre TXT e CSV

echo '<pre>';
print_r(array_merge($arrayTXT,$arrayCSV));
echo '</pre>';