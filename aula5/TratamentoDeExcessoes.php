<?php

class TesteException
{
public function mensagem (string $msg)
{

if(empty($msg)){
    throw new Exception ("Parametro mensagem obrigatorio",500);
}
return $msg;

}
}
$obj = new TesteException();

try{
    echo $obj->mensagem('ola');
}catch (Esception $e){
    echo "Mensagem e um parametro obrigatorio";
}catch (ArgumentCountError $e) {
    echo "Falta parametros<br>";
}catch (TypeError $e){
        echo "Confira o tipo de variave inserida: {$e}<br>";    
    }finally {
        echo "Fim da execucao";
    }
    
    
    ?>