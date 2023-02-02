<?php

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;

//inicializar o projeto "php ..\composer.phar install"
//iniciar o servidor "php -S localhost:8000"
//quando alterar o arquivo composer.json, executar o comando no terminal "php ..\composer.phar dumpautoload -o"

echo CarrinhoCompra::teste();