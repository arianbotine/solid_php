<?php

namespace src;

use src\CarrinhoCompra;

class Pedido {
    private string $status;
    private CarrinhoCompra $carrinhoCompra;
    private float $valorPedido;

    public function __construct() {
        $this->status = 'aberto';
        $this->carrinhoCompra = new CarrinhoCompra();
        $this->valorPedido = 0;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus(string $status): self {
        $this->status = $status;
        return $this;
    }

    public function getCarrinhoCompra() {
        return $this->carrinhoCompra;
    }

    public function confirmar() {
        if ($this->carrinhoCompra->validarCarrinho()) {
            $this->setStatus('confirmado');
            return true;
        }
        return false;
    }
}
