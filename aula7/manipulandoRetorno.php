<?php

//parametros para conexao
$servidor = 'mysql:host=localhost;dbname=blog';
$usuario = 'developer';
$senha = '4linux';
//teste de conexao
try {
    //cursor de conexão
    $conexao = new PDO($servidor, $usuario, $senha);
    $res = $conexao->query('SELECT * FROM usuarios');

    var_dump($res->fetch(PDO::FETCH_ASSOC));
     
} catch (PDOException $erro) {
    echo $erro;
}
