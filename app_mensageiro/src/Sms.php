<?php

namespace src;

use src\interfaces\InterfaceMensagem;

class Sms implements InterfaceMensagem {
    public function enviar(): void {
        echo 'Sms: Seu token é 9999';
    }
}
