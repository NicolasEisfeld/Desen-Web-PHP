<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <form action="" method="POST" >
       <label for="nome">Nome</label>
       <input type="text" id="nome" name="nome"><br>
       <label for="idade">Idade</label>
       <input type="number" id="idade" name="idade"><br>
       <label for="email">Email</label>
       <input type="text" id="email" name="email"><br>

       <button>Cadastrar</button>
    </form>

    <?php 

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['mensagem'])) {
        
        $SQL = "INSERT INTO usuarios (Nome, idade, email) VALUES ("
        if ($mysqli->query($sql)) {
            $id_usuario = $mysqli->insert_id;
            echo "Usuário inserido"
        }
    }
    ?>
</body>
</html>
