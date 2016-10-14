<?php
session_start();

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
    echo "Area Restrita...";

    if (isset($_FILES['arquivo'])) {

        if (count($_FILES['arquivo']['tmp_name']) > 0) {

            for ($q=0;$q<count($_FILES['arquivo']['tmp_name']);$q++) {

                //$nomedoarquivo = md5($_FILES['arquivo']['name'][$q].time().rand(0,999)).'.jpg';
                $nomedoarquivo = $_FILES['arquivo']['name'][$q];

                move_uploaded_file($_FILES['arquivo']['tmp_name'][$q], 'arquivos/'.$nomedoarquivo);

            }

        }

    }

} else {
    header("Location: login.php");
}



?>
<hr>
<form method="post" enctype="multipart/form-data">

    Arquivo:<br/>
    <input type="file" name="arquivo[]" multiple/><br/><br/>

    <input type="submit" value="Enviar arquivos"/>

</form>

<form method="POST" action="login.php">
    <input type="submit" name="logout" value="Logout" />
</form>
