<?php

trait Operacoes
{
    public function somar($n1, $n2)
    {
        return $n1 + $n2;
    }
    public function subtrair($n1, $n2)
    {
        return $n1 - $n2;
    }
    public function multiplicar($n1, $n2)
    {
        return $n1 * $n2;
    }
    public function dividir($n1, $n2)
    {
        return $n1 / $n2;
    }
}

trait A
{
    public function a()
    {
        echo "Eu sou a funcao a da trait A <br>";
    }
    public function b()
    {
        echo "Eu sou a funcao b da trait A <br>";
    }
}
trait B
{
    public function a()
    {
        echo "Eu sou a funcao a da trait B <br>";
    }
    public function b()
    {
        echo "Eu sou a funcao b da trait B <br>";
    }
    public function c()
    {
        echo "Eu sou a funcao c da trait B <br>";
    }
}

var_dump((new class
{
    use a, b {
        B::b insteadof A;
        A::a insteadof B;
        B::a as metodoAdaTraitB;
    }
})->metodoAdaTraitB());

trait C
{
    use A, B {
        B::b insteadof A;
        A::a insteadof B;
        B::a as metodoAdaTraitB;
    }
}

var_dump((new class
{
    use C;
})->metodoAdaTraitB());
