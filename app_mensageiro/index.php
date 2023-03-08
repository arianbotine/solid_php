<?php

use src\Mensageiro;

require __DIR__ . "/vendor/autoload.php";

$msg = new Mensageiro();
$msg->enviarToken();
