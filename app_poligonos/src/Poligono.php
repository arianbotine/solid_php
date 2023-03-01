<?php

namespace src;

class Poligono {
    protected object $forma;


    public function getForma() {
        return $this->forma;
    }

    public function setForma(object $forma): void {
        $this->forma = $forma;
    }

    public function getArea(): float {
        return ($this->getForma()->getAltura() * $this->getForma()->getLargura());
    }
}
