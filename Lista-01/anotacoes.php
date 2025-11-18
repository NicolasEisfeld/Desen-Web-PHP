
<!DOCTYPE html>
    <html>
    <head>
        <title>Exercício 6</title> 
    </head>
    <body>
        <h1>Anotações em arquivo.</h1> 
        
        <form action="" method="POST">
            <label>Escreva sua anotação:
                <br>
                <textarea name="anotacao" id="anotacao" cols="30" rows="10"></textarea>
            </label>
            <br>
            <input type="submit" value="Salvar anotação">
        </form>

        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['anotacao'])) {

                $mensagem = $_POST['anotacao'];
                $mensagem = $mensagem . "\n";

                file_put_contents('anotacoes.txt', $mensagem, FILE_APPEND);
            }
        ?>

        <?php
        $arquivoMensagens = 'anotacoes.txt';

        if (file_exists($arquivoMensagens)) {
            $linhas = file($arquivoMensagens, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            
            if (!empty($linhas)) {
                ?>

            <?php
                $linhas = array_reverse($linhas);
                
                foreach ($linhas as $linha) { 
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
                    <p>O arquivo está vazio.</p>
                    
                    <p><a href="./index.html">Início</a></p>
                <?php
            }
        } else {
            ?>
                <p>Nenhuma mensagem foi salva ainda.</p>
                
                <p><a href="./index.html">Início</a></p>
            </body>
            </html>
            
            <?php
        }
        ?>
        
</body>
</html>

