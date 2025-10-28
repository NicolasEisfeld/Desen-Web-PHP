
<html>
<head>
    <meta charset="utf-8">
    <title>Exercício 1 - PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Exercício 1</h1>
    <form action="./saudacao.php" method="GET">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Nome">
        <label for="sobrenome">Sobrenome:</label>
        <input type="text" id="sobrenome" name="sobrenome" placeholder="Sobrenome">
        <label for="hora">Horas:</label>
        <input type="time" id="hora" name="hora">
        <input type="submit" value="Enviar">
    </form>
    <br><br>
    <h1>Resultado</h1>
    <?php
        $nome = $_GET("nome");
        $sobrenome = $_GET("sobrenome");
        $horas = $_GET("horas");
        $horas = intval($horas);
        
        if ($hora >= 5 && $hora < 12) {
            $mensagem = "Bom dia";
        } elseif ($hora >= 12 && $hora < 19) {
            $mensagem = "Boa tarde";
        } else {
            $mensagem = "Boa noite";
        }


        echo "<h1>$mensagem, $nomeCompleto!</h1>"

    ?>
</body>
</html>

