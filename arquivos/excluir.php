<?php
require 'config.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = addslashes($_GET['id']);

    $sql = "delete from usuarios where id = '$id'";
    $pdo->query($sql);

    header("location: index.php");
} else {
    header("location: index.php");
}
