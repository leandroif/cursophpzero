<?php
require 'facebook.php';

$fb = new Facebook();
$post = $fb->createPost();
$post->setAuthor("Leandro");
$post->setMessage("teste te tetfs fs");

echo $post->getAuthor();
echo "<hr/>";

$post2 = $fb->createPost();
$post2->setAuthor("ssdsd");
$post2->setMessage("teste te tetfs fs");

echo $post2->getAuthor();

