<?php

    //parametro para conexao
    $servidor = 'mysql:host=localhost;dbname=blog';
    $usuario = 'developer';
    $senha = '4linux';

    //teste  de conexao
    try{
        //cursor de conexao
        $conexao = new PDO($servidor, $usuario, $senha);
        $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       // $count = $conexao->exec("DELETE FROM usuarios");
       $res= $conexao->query('SELECT * FROM usuarios');
        foreach ($res as $usuario){
            echo "Nome: " . $usuario['nome'] . " | ";
            echo "Email: " . $usuario['email'] . "<br>";
        }
        //echo "$count linha foram apagadas";
    } catch (PDOException $erro) {
        echo $erro;
    }

?>
