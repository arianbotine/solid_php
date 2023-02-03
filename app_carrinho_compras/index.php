<?php

require __DIR__."/vendor/autoload.php";

use src\CarrinhoCompra;

//inicializar o projeto "php ..\composer.phar install"
//iniciar o servidor "php -S localhost:8000"
//quando alterar o arquivo composer.json, executar o comando no terminal "php ..\composer.phar dumpautoload -o"

$carrinho1 = new CarrinhoCompra();

print_r($carrinho1->exibirItens());

$carrinho1->adicionarItem('Monitor', 1000.99);
$carrinho1->adicionarItem('Mouse', 75.10);
$carrinho1->adicionarItem('Teclado', 150.99);

echo "</br>";
print_r($carrinho1->exibirItens());