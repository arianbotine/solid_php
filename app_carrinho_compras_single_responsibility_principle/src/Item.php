<?php

namespace src;

class Item {
    private string $descricao;
    private float $valor;

    public function __construct() {
        $this->descricao = '';
        $this->valor = 0;
    }

    public function getDescricao() {
        return $this->descricao;
    }
    public function setDescricao(string $descricao): self {
        $this->descricao = $descricao;
        return $this;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor(float $valor): self {
        $this->valor = $valor;
        return $this;
    }

    public function itemValido() {
        if ($this->descricao == '') {
            return false;
        }
        if ($this->valor <= 0) {
            return false;
        }
        return true;
    }
}
