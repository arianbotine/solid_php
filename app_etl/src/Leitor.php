<?php

namespace src;

class Leitor {
    private string $diretorio;
    private $arquivo;

    public function __construct() {
        $this->diretorio = '';
        $this->arquivo = 0;
    }

    public function getDiretorio(): string {
        return $this->diretorio;
    }
    public function setDiretorio(string $diretorio): self {
        $this->diretorio = $diretorio;
        return $this;
    }

    public function getArquivo(): string {
        return $this->arquivo;
    }

    public function setArquivo(string $arquivo): self {
        $this->arquivo = $arquivo;
        return $this;
    }
}
