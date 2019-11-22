<?php

class VirarString
{
public function __construct($mensagem)
{
    $this->foo = $mensagem;
    }
    public function __toString()
    {
        return 'Eae irmao, quero virar string nao';
    }
    public function __invoke(){
        echo '<br>4 dias de curso e nao aprendeu???<br>';
    }
}
$obj = new VirarString('oi');
echo $obj;
$obj(34);