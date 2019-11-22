<?php

class Pessoa
{
    public $nome;
    public $sobrenome;
    public $dataNascimento;
    public $sexo;

    public function nomeCompleto() : string
    {
        return "{$this->nome} {$this->sobrenome}"; 
    }
}