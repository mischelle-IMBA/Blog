<?php

include "repository/database.php";
include "repository/articleRepository.php";


$template ='articles.phtml';

// include "../templates/about.phtml";

$db = openDatabase('Blog','root','troiswa');

$articles = findArticle($db, $_GET['id']);

include "../templates/base.phtml";
?>
