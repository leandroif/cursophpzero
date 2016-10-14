<?php
session_start();

require 'config.php';

if(isset($_POST['logout']) && !empty($_POST['logout'])) {
    session_destroy();
}

if (isset($_POST['email']) && !empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5(addslashes($_POST['senha']));

    $sql = "select * from usuarios where email = '$email' and senha = '$senha'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0){
        $dado = $sql->fetch();

        $_SESSION['id'] = $dado['id'];

        header("location: index.php");
    } else {
        header("location: index.php");
    }

}



?>

<form method="POST">
    E-mail:<br/>
    <input type="text" name="email" /><br/><br/>
    Senha:<br/>
    <input type="password" name="senha" /><br/><br/>

    <input type="submit" value="Entrar" /><br/>
</form>