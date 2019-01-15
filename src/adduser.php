<?php

include('repository/userRepository.php');
include('repository/database.php');
include('utilities/utilities.php');

$db = openDatabase('Blog','root','troiswa');

if (empty($_POST)) {
  render('security');
} else {
  addUserDatabase($db, $_POST);
  header('Location: home.php');
}

?>
