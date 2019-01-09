<?php

include('repository/userRepository.php');
include('repository/database.php');

$db = openDatabase('Blog','root','troiswa');

if (empty($_POST)) {
  include "../templates/home.phtml";
} else {
  addUserDatabase($db, $_POST);
  var_dump($_POST);
}

?>
