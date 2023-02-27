<?php

namespace src;

class Leitor {
    private string $diretorio;
    private $arquivo;

    public function __construct() {
        $this->diretorio = '';
        $this->arquivo = '';
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

    public function lerArquivo(): array {
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
        $extensao = explode('.', $this->getArquivo());

        $classe = '\src\extrator\\' . ucfirst($extensao[1]);

        return call_user_func_array(
            [
                new $classe,
                'lerArquivo'
            ],
            [
                $caminho
            ]
        );
    }
}
