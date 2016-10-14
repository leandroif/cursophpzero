<?php
require 'config.php';

$id = 0;

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);
}

if (isset($_POST['nome']) && !empty($_POST['nome'])) {
    $nome  = addslashes($_POST['nome']);
    $email = addslashes($_POST['email']);

    $sql="update usuarios set nome = '$nome',email = '$email' where id = '$id'";
    $pdo->query($sql);

    header("location: index.php");

}

    $sql = "select * from usuarios where id = '$id'";
    $sql = $pdo->query($sql);

    if ($sql->rowCount() > 0){
        $dado = $sql->fetch();
    } else {
    header("location: index.php");
    }

?>
<form method="POST">
    Nome:<br/>
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"/><br/><br/>
    E-mail:<br/>
    <input type="text" name="email" value="<?php echo $dado['email'];  ?>"/><br/><br/>

    <input type="submit" value="Editar" /><br/>
</form>
