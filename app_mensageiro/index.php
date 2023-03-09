<?php

use src\Email;
use src\Mensageiro;
use src\Sms;

require __DIR__ . "/vendor/autoload.php";

$msg = new Mensageiro(new Email());
$msg->enviarToken();

echo "<br>";

$msg = new Mensageiro(new Sms());
$msg->enviarToken();
