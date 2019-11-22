<?php require_once '../validaEmail.php'; ?>
<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Validar E-mail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php 
        if(isset($_POST['inputEmail'])){
            try{
                $validate_email = Email::validar($_POST['inputEmail']);
                if($validate_email){
                    echo '
                    <div class="alert alert-success">
                        <strong>Sucesso</strong><p>Email válido</p>
                    </div> ';
                }
            }catch(Exception $e){
                echo '
                <div class="alert alert-danger">
                    <strong>Alerta</strong><p>Email não é válido</p>
                </div> ';
            }
        }
    ?>
    <form action="" method="post">
        <div class="form-group col-4">
            <label for="inputEmail">Digite um Email</label>
            <input class="form-control" type="text" name="inputEmail" id="inputEmail">
        </div>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </form>
</body>
</html>