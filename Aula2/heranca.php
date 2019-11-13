<?php

function __autoload(string $class)
{
    $arquivo = "classe/$class.php";
    require_once($arquivo);
}

$funcionario = new Funcionario();
$funcionario->nome = 'Godofredo';
$funcionario->sobrenome = 'Silva';
$funcionario->dataNascimento = '1966-02-06';
$funcionario->sexo = 'Indefinido';
$funcionario->cargo = 'Escravo/Programador';
$funcionario->setor = 'Tecnologia da info';
$funcionario->atributoNovo = 'Novo';

echo "<pre>";
var_dump($funcionario);

echo '<hr>';
echo "Nome do funcionário: {$funcionario->nomeCompleto()}";

$cliente = new Cliente();
$cliente->rg = "x";
$cliente->cpf = "y";
$cliente->nome = "Nome";
$cliente->sobrenome = "Sobrenome";
$cliente->sexo = "n";
$cliente->dataNascimento = "Numeros aki";
echo "<br>";
var_dump($cliente);
echo "<br>";
echo "Nome do cliente {$cliente->nomeCompleto()}";

$estagiario = new Estagiario();
