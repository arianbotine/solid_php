<?php

namespace src;

class Mensageiro {
    private $classe;
    public function getClasse() {
        return $this->classe;
    }
    public function setClasse(string $classe) {
        $this->classe = $classe;
        return $this;
    }
    public function enviarToken(): void {
        $classe = "\src\\" . ucfirst($this->classe);
        $obj = new $classe();
        $obj->enviar();
    }
}
