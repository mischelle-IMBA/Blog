<?php

include "repository/database.php";
include "repository/articleRepository.php";


$template ='about';

// include "../templates/about.phtml";

$db = openDatabase('Blog','root','troiswa');

if (!empty($_GET)) {

  $article = findArticle($db, $_GET['id']);

  include "../templates/base.phtml";
} else  if (!empty($_POST)) {
  $err = updateArticle($db, $_POST);

  header('Location: about.phtml?titre=' . $_POST['titre'] . '&sous_titre=' . substr($_POST['titre'], 0, 4));
} else {
  var_dump($db);
}
?>
