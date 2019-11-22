<?php

require "objetoInterface.php";

class Exercicio implements objeto
{
    public function __tostring()
    {
        echo "Estou sendo convertido para string";
    }

    public function __invoke()
    {
        echo "Estou sendo chamado como metodo";
    }

    public function __set($parametro, $valor)
    {
    echo "Atribuindo a variavel {$parametro}";
    }

    public function __get($parametro)
    {
        echo "Acessando o atributo {$parametro}";
    }

    public function __call($metodo, $valores)
    {
        echo "chamado {$metodo}";
        //return $this->metodo();
    }

    public static function __callStatic($metodo, $valores)
    {
        echo "chamado {$metodo}";
    }

    public function metodo()
    {
        echo "teste";
    }
}

$obj = new Exercicio;

$obj->metodoxhcggahd();
