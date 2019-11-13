<?php

abstract class Abstrata
{
    public $nome;
    public $sobrenome;

    public function nomeCompleto() : string
    {
        return "{$this->nome} {$this->sobrenome}";
    }
}