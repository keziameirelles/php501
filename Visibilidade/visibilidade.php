<?php

class MinhaClasse
{
    public function __construct()
    {}
    public function MeuPublico()
    {}
    protected function MeuProtegido()
    {}
    private function MeuPrivado()
    {}
    
        //Quando nao passo visibilidade - > public
        function Foo ()
        {
            $this->MeuPublico();
            $this->MeuProtegido();
            $this->MeuPrivado();
        }
}

//$obj = new minhaclasse();
//$obj->MeuPublico();
//$obj->MeuPrivado();
//$obj->MeuProtegido();
//$obj->Foo();

Class MinhaClasse2 extends MinhaClasse
{
    function Foo2() {
        $this->MeuPublico();
        $this->MeuProtegido();
        $this->MeuPrivado();
    }
}

$obj2 = new MinhaClasse2;
$obj2->MeuPublico();
$obj2->MeuPrivado();
$obj2->MeuProtegido();
$obj2->Foo2();
