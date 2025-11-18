
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['mensagem'])) {

    $mensagem = $_POST['mensagem'];
    $dataHora = date('d/m/Y H:i:s');
    

    $linha = $dataHora . " - " . $mensagem . "\n";
    file_put_contents('mensagens.txt', $linha, FILE_APPEND);
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Salvo</title> 
    </head>
    <body>
        <h1>Mensagem salva.</h1> 
        
        <p><b>Salvo em:</b> <?php echo $dataHora; ?></p>
        <p><?php echo htmlspecialchars($mensagem); ?></p>
        
        <p><a href="./escrever.php">Voltar</a> | <a href="./index.html">Início</a></p>
    </body>
    </html>
    
    <?php
} else {
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Salvar  Mensagem</title> 
    </head>
    <body>
        <h1>Exercício 3</h1>
        <p>Mensagem Curta:</p>
        <form action="" method="POST"> 
            <input type="text" name="mensagem" placeholder="Digite Aqui">
            <p style="font-size: 12px;">Máx. 80 caracteres.</p>
            <input type="submit" value="Salvar" placeholder="Salvar">
        </form>
    </body>
    </html>
    
    <?php
}
?>
</body>
</html>

