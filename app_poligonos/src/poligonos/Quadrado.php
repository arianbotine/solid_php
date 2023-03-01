<?php

namespace src\poligonos;

class Quadrado {
    protected float $largura;
    protected float $altura;

    public function __construct() {
        $this->largura = 0;
        $this->altura = 0;
    }

    public function setLargura(string $largura): void {
        $this->largura = $largura;
        $this->altura = $largura;
    }
    public function setAltura(float $altura): void {
        $this->largura = $altura;
        $this->altura = $altura;
    }

    public function getLargura() {
        return $this->largura;
    }

    public function getAltura() {
        return $this->altura;
    }
}
