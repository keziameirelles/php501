<?php

class TestePropriedade
{
    protected $nome;

    public function __set($propriedade, $valor)
    {
        if (property_exists(__CLASS__, $propriedade)) {
            $this->$propriedade = $valor;
            echo __FILE__;
        } else {
            echo "Propriedade {$propriedade} Não Existe, Favor criar</br>";
            echo "O valor {$valor}, Não pode ser atribuido no momento";

        }
    }
}

class TestePropriedade2
{
    protected $nome;
    protected $idade;
    protected $sobrenome;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    public function __set($propriedade, $valor)
    {
        if(property_exists(__CLASS__,$propriedade)){
            echo "Valor atribuido";
            $this->$propriedade = $valor;;
        }else{
            echo "Você não possui permissão para criar atributos";
        }
    }
    public function __get($propriedade)
    {
      echo "Você acessou o atributo {$propriedade}";  
    }
}

$obj2 = new TestePropriedade2('Daniel',19);
echo $obj2->nome;
