<?php

require_once 'Operacoes.php';

class Calculadora
{
    use Operacoes;
    public function __construct()
    {
        echo "Criando calculadora...<br>";
    }
}

$calculos = new Calculadora;

$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

if (isset($n1) and isset($n2)) {
    echo $calculos->somar($n1, $n2);
}
;
