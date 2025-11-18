<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01</title>
</head>
<body>

<?php 
    $URL = "sql10.freesqldatabase.com";
    $User = "sql10803464";
    $Senha = "HwmUhZv6EI";
    $NomeDB = "sql10803464";
    $Porta = "3306";

    $mysqli = new mysqli($URL, $User, $Senha, $NomeDB, $Porta);

    if($mysqli->connect_error) {
        echo "Erro";
    } else {
        echo "conexão bem sucedida";
    }
    mysqli->close();

?>

</body>
</html>