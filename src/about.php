<?php
$template ='about';

// include "../templates/about.phtml";

$db = openDatabase('Blog','root','troiswa');

if (!empty($_GET)) {

  $about = findArticle($db, $_GET['id']);
  // $billet = findBillet($db);

  include "../templates/home.phtml";
} else {
}
?>
