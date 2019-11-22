<?php

class Funcionario
{
    public function oi()
    {
        echo "Ola<br>";
    }
    public function __destruct()
    {
        echo "destruindo";
    }
    public function __sleep()
    {
        return ['nome', 'cargo'];
    }
    public function __wakeup()
    {
        echo "pegadinha do malandro<br>";
        $this->sobrenome = 'Atribuido com o wake up<br>';
    }
}

$funcionario = new Funcionario;
$funcionario->nome = 'Joaquim Jose';
$funcionario->sobrenome = 'da Silva Xavier';
$funcionario->dataNascimento = '1746-11-12';
$funcionario->sexo = 'M';
$funcionario->cargo = 'Morte';
$funcionario->setor = 'Funerario';

echo "<pre>";

var_dump($funcionario);

echo serialize($funcionario);

$serializado = serialize($funcionario);

unset($funcionario);

$funcionario = unserialize($serializado);

$funcionario->oi();
