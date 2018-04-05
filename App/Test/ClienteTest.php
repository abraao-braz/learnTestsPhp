<?php

namespace App\Test;

use App\Model\Area;
use App\Model\Cliente;
use PHPUnit\Framework\TestCase;

class ClienteTest extends TestCase
{

    public function testNome() {
        $nome = "abraao";
        $cliente = new Cliente();
        $cliente->setNome("abraao");

        $this->assertEquals("abraao", $cliente->getNome());

    }


    public function testCalcArea() {
        $area = new Area();
        $this->assertEquals(6, $area->calcArea(2,3));
    }

}