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

    /**
     * @dataProvider dataItemValido
     */
    public function testItemValido($descricao, $valor) {
        $item = new Item();
        $item->setValor($valor);
        $item->setDescricao($descricao);
        $this->assertTrue($item->itemValido());

        $item->setValor(-15.52);
        $item->setDescricao($descricao);
        $this->assertFalse($item->itemValido());
    }

    /**
     * @dataProvider dataValoresInvalidos
     */
    public function testItemInvalidoQuandoValorMenorOuIgualAZero($valor) {
        $descricao = 'Item teste';

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

    public static function dataValoresInvalidos() {
        return [[0], [-10]];
    }

    public static function dataItemValido() {
        return [['Item teste 1', 10], ['ipadsipdasijdasojdhadfshgfuodhfouadhf', 10.54], ['a', 99999999.10], ['14', 1]];
    }
}
