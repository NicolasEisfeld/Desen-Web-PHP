<?php
$arquivoMensagens = 'mensagens.txt';

if (file_exists($arquivoMensagens)) {
    $linhas = file($arquivoMensagens, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    
    if (!empty($linhas)) {

        ?>
        
        <!DOCTYPE html>
        <html>
        <head>
            <title>Todas as mensagens</title>
        </head>
        <body>
            <h1>Todas as mensagens.</h1>

            <?php
            $linhas = array_reverse($linhas);
            
            foreach ($linhas as $linha) { // Repetidor para Vetor
                ?>
                <p><?php echo htmlspecialchars($linha); ?></p>
                <?php
            }
            ?>
            
            <a href="./index.html">Início</a>
        </body>
        </html>
        
        <?php
    } else {
        ?>
        
        <!DOCTYPE html>
        <html>
        <head>
            <title>Sem Mensagens</title>
        </head>
        <body>
            <h1>Nenhuma Mensagem Encontrada</h1>
            
            <p>O arquivo está vazio.</p>
            
            <p><a href="./escrever.php">Escrever Mensagem</a> | <a href="./index.html">Início</a></p>
        </body>
        </html>
        
        <?php
    }
} else {
    ?>
    
    <!DOCTYPE html>
    <html>
    <head>
        <title>Arquivo Não Encontrado</title>
    </head>
    <body>
        <h1>Arquivo Não Encontrado</h1>
        
        <p>Nenhuma mensagem foi salva ainda.</p>
        
        <p><a href="./escrever.php">Escrever Primeira Mensagem</a> | <a href="./index.html">Início</a></p>
    </body>
    </html>
    
    <?php
}
?>