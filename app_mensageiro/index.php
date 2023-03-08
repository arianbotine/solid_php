<?php

use src\Mensageiro;

require __DIR__ . "/vendor/autoload.php";

$msg = new Mensageiro();
$msg->setClasse('sms');
$msg->enviarToken();

echo "<br>";

$msg = new Mensageiro();
$msg->setClasse('email');
$msg->enviarToken();
