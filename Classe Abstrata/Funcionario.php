<?php

require_once 'Pessoa.php';

class Funcionario extends Pessoa
{
    public $setor;
    public $cargo;

    public function gerarLog(string $dataehora, string $mensagem)
    {
        echo "Gerando log {$dataehora} {$mensagem}";
    }
}

$funcionario = new Funcionario();

$funcionario->gerarLog('DataAki','Mensagem mto loka');