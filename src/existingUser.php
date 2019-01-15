<?php

include "repository/userRepository.php";
include "utilities/utilities.php";
include 'repository/database.php';

$db = openDatabase('Blog','root','troiswa');

if (empty($_POST)) {
  // Mode Consultation === requête HTTP GET
  render('existingUser');//<--existingUser.phtml
} else {
  // var_dump($_POST); die;
  // Mode Ecriture === requête HTTP POST
  // $password = "123";
  if(isset($_POST['email'])) {
    // Chercher dans la base si une personne existe avec ce pseudo ?
    $user = isUserRegistered($db, $_POST['email']);
    if(!empty($user)) {
      // Vérifier que le mot de passe du formulaire correspond au $user
      if ($_POST['password'] == $user['mot_de_passe']) {
        session_destroy();
        session_start();
        $_SESSION['connected'] = true;
        $_SESSION['user'] = $user;
        header("Location: http://localhost/Développement/blog/src/home.php");
      } else {
        $message = "Mot de passe erroné";
        header("Location: http://localhost/Développement/blog/src/existingUser.php");
      }
    } else {
      $message = "Aucun utilisateur ne correspond à cet e-mail";
      header("Location: http://localhost/Développement/blog/src/existingUser.php");
    }
  } else {
    $message = "Aucun e-mail n'a été envoyé";
    header("Location: http://localhost/Développement/blog/src/existingUser.php");
  }
}
