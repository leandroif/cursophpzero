<?php
if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $msg = addslashes($_POST['msg']);

    $para = "leandroif@terra.com.br";
    $assunto = "Pergunta do contato";
    $corpo = "nome: ".$nome." - email: ".$email." - Mensagem: ".$msg;

    $cabecalho = "From: leandroif@terra.com.br"."\r\n".
                 "Reply-To: ".$email."\r\n".
                 "X-mailer: PHP/".phpversion();

    mail($para, $assunto, $corpo, $cabecalho);

    echo "<h2>enviado</h2>";
    exit;


}

?>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome"/><br/><br/>

    E-mail:<br/>
    <input type="email" name="email"/><br/><br/>

    Mensagem:<br/>
    <textarea name="msg"></textarea><br/><br/>

    <input type="submit" value="enviar">
</form>