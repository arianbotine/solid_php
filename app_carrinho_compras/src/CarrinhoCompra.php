<?php

namespace src;

class CarrinhoCompra {

    private $itens;
    private $status;
    private $valorTotal;
    
    public function __construct(){
        $this->itens = [];
        $this->status = 'aberto';
        $this->valorTotal = 0;
    }

    public function exibirItens(){
        return $this->itens;
    }

    public function adicionarItem(string $itemDescricao, float $valor){
        array_push($this->itens, ["itemDescricao" => $itemDescricao, "valor" => $valor]);
    }
}