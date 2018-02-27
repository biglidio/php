<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Contato</title>
    </head>
    <body>
       <?php
            
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $mensagem = $_POST['mensagem'];
            
            if ($nome != '' && $email != '' && $telefone != '' && $mensagem != '') {
                // GERA SCRIPT DE EMAIL
                
                if ($enviado) {
                    // MOSTRA MENSAGEM DE ENVIADO
                } else {
                    // MOSTRA MENSAGEM DE ERRO
                }
                
            } else { 
        ?>
            <!-- ESSE HTML ESTÁ DENTRO DO ELSE DO PHP, OU SEJA, SÓ VAI SER GERADO, SE CAIR NO ELSE -->
            <form method="post" action="contato.php">
                <input type="text" name=""/>
                <input type="text" name=""/>
                <input type="text" name=""/>
                <input type="text" name=""/>
                <input type="submit" value="Submit"/>
            </form>
            
        <?php } ?>
            
    </body>
</html>