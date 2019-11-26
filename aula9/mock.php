<?php

use PHPUnit\Framework\TestCase;

class AlgumaClasse
{
    public function fazAlgo()
    {
        //funcao a implementar
    }
}

class Mock extends Testcase
{
    public function testMock()
    {
        $duble = $this->createMock(AlgumaClasse::class);
        $duble->method('FazAlgo')
        ->willReturn('foo');

        $duble->method('RetornaNumero')
        ->willReturn(5);

        $this->assertSame('foo',$duble->fazAlgo(),"Nao fez algo");
    }
}
