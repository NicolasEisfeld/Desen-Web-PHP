<html>
<head>
    <meta charset="utf-8">
    <title>Exercício 2 - PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Exercício 2</h1>
    <script>
        let visivel = false;
        function troca() {
            console.log('Estava ' + visivel);
            visivel = !visivel;
            if (visivel) {
                document.querySelector('#toggle').innerHTML = "Ocultar Senha";
                document.querySelector('input[name=senha]').type = "text";
            } else {
                document.querySelector('#toggle').innerHTML = "Mostrar Senha";
                document.querySelector('input[name=senha]').type = "password";                
            }
        }
    </script>

    <form action="" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome" required>
        <br><br>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <button type="button" id="toggle" onclick="troca()">Mostrar Senha</button>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <a href="./index.html">Início</a>

    <br><br>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST["nome"];
        $senha = $_POST["senha"];

        if ($nome === "admin" && $senha === "admin") {
            echo "<h3>Bem-vindo, administrador!</h3>";
        } else {
            echo "<h3>Nome ou senha incorretos.</h3>";
        }
    }
    ?>  
</body>
</html>
