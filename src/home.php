<?php
$template ='home';

include('repository/articleRepository.php');
include('repository/database.php');
include ('../templates/home.phtml');

$db = openDatabase('Blog','root','troiswa');

$articles = findArticle($db, $_GET['id']);


if (empty($_POST)) {


} else {
  articles($db, $_POST);

   include "../templates/base.phtml";

  var_dump($_POST);

}


?>







?>
