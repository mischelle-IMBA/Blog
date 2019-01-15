<?php

include "repository/userRepository.php";
include "utilities/utilities.php";
include 'repository/database.php';

$db = openDatabase('Blog','root','troiswa');

if (empty($_POST)) {
  // Mode Consultation === requête HTTP GET
  render('security');
} else {
  // var_dump($_POST); die;
  // Mode Ecriture === requête HTTP POST
  // $password = "123";
  if(isset($_POST['uname']))
  {
    // Chercher dans la base si une personne existe avec ce pseudo ?
    $user = isUserRegistered($db, $_POST['uname']);
    if(!empty($user)) {
      // Vérifier que le mot de passe du formulaire correspond au $user
      session_destroy();
      session_start();
      $_SESSION['connected'] = true;
      $_SESSION['user'] = $user;
      echo "redirect";
    } else {
      echo "password";
    }
    include 'templates/security.phtml';
    exit();
  }
}



?>
