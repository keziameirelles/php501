<?php

require_once 'traits.php';

class Calculadora
{
    use operacoes;
}

$calc = new calculadora;

echo $calc->soma(1,2);