<?php

namespace App\Model;

class Cliente
{
    public $nome;

    public function setNome($nome) {
        $this->nome = $nome;
    }


    public function getNome() {
        return $this->nome;
    }
}