<?php

function __autoload(string $class)
{
    $arquivo = "classe/$class.php";
    require_once($arquivo);
}

$colecao = new PalavraCollection;
$colecao->addItem("Primeiro");
$colecao->addItem("Segundo");
$colecao->addItem("Terceiro");

echo "Ordem de Inclusao: <br>";
foreach ()

