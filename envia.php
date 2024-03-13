<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

$para = "douglaswilliamdroid@gmail.com";
$assunto = "Coleta de dados - Douglas dev";

$corpo = "Nome: ".$nome."\n"."E-mail: ".$email. "\n"."Telefone: ".$telefone."\n"."Mensagem: ".$mensagem;

$cabeca = "From: douglas5132@gmail.com"."\r\n"."Reply-to: ".$email."\r\n"."X-Mailer: PHP/".phpversion();

try {
    if(mail($para, $assunto, $corpo, $cabeca)){
        echo("E-mail enviado com sucesso!");
    }else{
        echo("Houve um erro ao enviar o email!");
    }
} catch (Exception $e) {
    echo 'Erro ao enviar e-mail: ',  $e->getMessage(), "\n";
}

?>