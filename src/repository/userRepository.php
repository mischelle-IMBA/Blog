<?php

function addUserDatabase(PDO $db, array $data)
{
  $req = $db -> prepare(
    'INSERT INTO utilisateur (nom, prenom, pseudo, mot_de_passe, e_mail)
     VALUES (:nom, :prenom, :pseudo, :mot_de_pass, :email)');

  $req->execute(array(
    'nom'=>$data['nom'],
    'prenom'=>$data['prenom'],
    'pseudo'=>$data['pseudo'],
    'mot_de_pass'=>$data['psw'],
    'email'=>$data['uname'],
  ));
}

function isUserRegistered (PDO $db, string $email)
{
  $req = $db->prepare(
    'SELECT *
     FROM `utilisateur`
     WHERE e_mail= :email'
   );
   $req->execute(['email' => $email]);
   $results = $req->fetch(PDO::FETCH_ASSOC);

   return $results;
}
 ?>
