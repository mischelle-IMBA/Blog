<?php

include('repository/userRepository.php');
include('repository/database.php');

$db = openDatabase('Blog','root','troiswa');

if (empty($_POST)) {

  //include('src/home.php');
  //include "../templates/home.phtml";
} else {
  addUserDatabase($db, $_POST);
   //include "../templates/about.phtml";
  var_dump($_POST);
}

?>
