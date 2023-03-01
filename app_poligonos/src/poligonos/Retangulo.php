<?php

namespace src\poligonos;

class Retangulo {
    protected float $largura;
    protected float $altura;

    public function __construct() {
        $this->largura = 0;
        $this->altura = 0;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function setLargura(string $largura): void {
        $this->largura = $largura;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function setAltura(float $altura): void {
        $this->altura = $altura;
    }
}
