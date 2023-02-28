<?php

namespace src;

class Quadrado extends Retangulo {

    public function setLargura(string $largura): void {
        $this->largura = $largura;
        $this->altura = $largura;
    }
    public function setAltura(float $altura): void {
        $this->largura = $altura;
        $this->altura = $altura;
    }
}
