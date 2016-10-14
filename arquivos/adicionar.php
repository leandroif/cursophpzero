<?php
require 'config.php';
if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome  = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);

    $sql="insert into usuarios set nome = '$nome',email = '$email', senha ='$senha'";
    $pdo->query($sql);

    header("location: index.php");

}
?>

<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" /><br/><br/>
    E-mail:<br/>
    <input type="text" name="email" /><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>

    <input type="submit" value="Cadastrar" /><br/>
</form>