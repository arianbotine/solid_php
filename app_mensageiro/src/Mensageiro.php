<?php

namespace src;

class Mensageiro {
    public function enviarToken(): void {
        $obj = new Email();
        $obj->enviar();
    }
}
