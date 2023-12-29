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