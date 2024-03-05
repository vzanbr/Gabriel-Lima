<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 

            $nome = addslashes($_POST['nome']);
            $email = addslashes($_POST['email']);
            $celular = addslashes($_POST['celular']);
            $mensagem = addslashes($_POST['mensagem']);
        
            $to = "gabriecvr123@gmail.com";
            $assunto = "Coleta de dados";
        
            $corpo = "Nome: ".$nome."\r\n".
                     "E-mail: ".$email."\r\n".
                     "Celular: ".$celular."\r\n".
                     "mensagem: ".$mensagem;
        
            $cabeca = "From: gabriecvr123@gmail.com"."\r\n"."Reply-to: ".$email."\r\n"."X=Mailer:PHP/".phpversion();
        
            if(mail($to,$assunto,$corpo,$cabeca)){
                echo("E-mail enviado com sucesso!");
            }else{
                echo("Houve um erro ao enviar o email");
            }
            
        ?>
    </main>

</body>
</html>