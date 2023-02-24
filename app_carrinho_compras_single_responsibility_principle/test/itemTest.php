<?php

use PHPUnit\Framework\TestCase;
use src\Item;

class ItemTest extends TestCase {
    public function testEstadoInicialItem() {
        $item = new Item();

        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    public function testGetESetDescricao() {
        $descricao = 'Item teste';

        $item = new Item();
        $item->setDescricao($descricao);
        $this->assertEquals($descricao, $item->getDescricao());
    }

    public function testGetESetValor() {
        $valor = 15.55;

        $item = new Item();
        $item->setValor($valor);
        $this->assertEquals($valor, $item->getValor());
    }

    public function testItemValido() {
        $descricao = 'Item teste';
        $valor = 15.55;


        $item = new Item();
        $item->setValor($valor);
        $item->setDescricao($descricao);
        $this->assertTrue($item->itemValido());

        $item->setValor(-15.52);
        $item->setDescricao($descricao);
        $this->assertFalse($item->itemValido());
    }

    public function testItemInvalidoQuandoValorMenorOuIgualAZero() {
        $descricao = 'Item teste';
        $valor = -15.55;

        $item = new Item();
        $item->setValor($valor);
        $item->setDescricao($descricao);
        $this->assertFalse($item->itemValido());

        $item->setValor(0);
        $this->assertFalse($item->itemValido());
    }

    public function testItemInvalidoQuandoDescricaoVazia() {
        $descricao = '';
        $valor = 10;

        $item = new Item();
        $item->setValor($valor);
        $item->setDescricao($descricao);
        $this->assertFalse($item->itemValido());
    }

    public function testItemInvalido() {
        $descricao = '';
        $valor = 0;

        $item = new Item();
        $item->setValor($valor);
        $item->setDescricao($descricao);
        $this->assertFalse($item->itemValido());
    }
}
