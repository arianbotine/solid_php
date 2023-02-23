<?php

require __DIR__ . "/vendor/autoload.php";

use src\CarrinhoCompra;
use src\EmailService;
use src\Item;
use src\Pedido;

//inicializar o projeto "php ..\composer.phar install"
//iniciar o servidor "php -S localhost:8000"
//quando alterar o arquivo composer.json, executar o comando no terminal "php ..\composer.phar dumpautoload -o"
$carrinho1 = new CarrinhoCompra;

echo '<h3>Com SRP</h3>';

$pedido = new Pedido();
//-------------------------------------------
$item1 = new Item();
$item2 = new Item();

$item1->setDescricao('Porta copos');
$item1->setValor(4.55);

$item2->setDescricao('Lâmpada');
$item2->setValor(8.32);
//-------------------------------------------
echo '<h4>Pedido inicial</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//-------------------------------------------
$pedido->getCarrinhoCompra()->adicionarItem($item1);
$pedido->getCarrinhoCompra()->adicionarItem($item2);
//-------------------------------------------
echo '<h4>Pedido com itens</h4>';
echo '<pre>';
print_r($pedido);
echo '</pre>';
//------------------------------------------
echo '<h4>Itens do carrinho</h4>';
echo '<pre>';
print_r($pedido->getCarrinhoCompra()->getItens());
echo '</pre>';
//------------------------------------------
echo '<h4>Valor do pedido</h4>';
$total = 0;
foreach ($pedido->getCarrinhoCompra()->getItens() as $key => $item) {
    $total += $item->getValor();
}
echo $total;
//------------------------------------------
echo '<h4>Carrinho está válido?</h4>';
echo $pedido->getCarrinhoCompra()->validarCarrinho();
//------------------------------------------
echo '<h4>Status do pedido</h4>';
echo $pedido->getStatus();
//------------------------------------------
$pedido->confirmar();
//------------------------------------------
echo '<h4>Status do pedido</h4>';
echo $pedido->getStatus();
//------------------------------------------
echo '<h4>E-mail </h4>';
if ($pedido->getStatus() == 'confirmado') {
    echo EmailService::enviaEmail();
}
