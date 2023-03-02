<?php

namespace src\dao;

use src\componentes\Log;
use src\componentes\Notificacao;
use src\DB;
use src\interfaces\InterfaceCadastro;

class LeadModel extends DB implements InterfaceCadastro {
    public function salvar() {
    }

    public function registrarLog(Log $log) {
    }

    public function enviarNotificacao(Notificacao $notificacao) {
    }
}
