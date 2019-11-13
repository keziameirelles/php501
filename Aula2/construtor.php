<?php

class Profissao
{
    //ctrl+shift+i Formatar segundo psr2
    public $salario;
    public $cargo;
    public $tempoDeCasa;

    /**
     * Classe construtora
     */

     public function __construct(string $cargo)
     {
         echo $cargo . "Criado com sucesso";
     }
     public function __destruct()
     {
         echo "Objeto sendo destruido";
     }
}
echo "<pre>";
$pedreiro = new Profissao('Pedreiro');
unset($pedreiro);
echo "<br>";
var_dump($pedreiro);

var_dump($pedreiro);
