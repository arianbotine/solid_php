<?php

namespace src;

use src\interfaces\InterfaceMensagem;

class Email implements InterfaceMensagem {
    public function enviar(): void {
        echo 'E-mail: Seu token é 9999';
    }
}
