<?php

namespace src;

use src\interfaces\InterfaceMensagem;

class Mensageiro {
    private $classe;

    public function __construct(InterfaceMensagem $classe) {
        $this->setClasse($classe);
    }
    public function getClasse() {
        return $this->classe;
    }
    public function setClasse(InterfaceMensagem $classe) {
        $this->classe = $classe;
        return $this;
    }
    public function enviarToken(): void {
        $this->getClasse()->enviar();
    }
}
