<?php
//session_start();
include "repository/database.php";
include "repository/articleRepository.php";

//$template ='home';//
$db = openDatabase('Blog','root','troiswa');
 //include "../templates/home.phtml";//
 //$articles = findArticle($db, $_GET['id']);

if (empty($_POST)) {
	$articles = [
	'titre' =>'',
	'sous_titre' =>'',
	'date_publication' =>'',
	'corps' =>'',
	'date_creation' =>'',
];
$articles = findArticle($db, $_GET['id']);
$action = "home.php";
include "../templates/home.phtml";
}
else{
	  header("Location: http://localhost/Développement/blog/src/home.php");
		include "../templates/base.phtml";
};
?>
