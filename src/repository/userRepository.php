<?php

function addUserDatabase(PDO $db, array $data)
{
  $req = $db -> prepare('INSERT INTO utilisateur (mot_de_pass, email)
  Values(:mot_de_pass, :email)');

  $req->execute(array(
    'mot_de_pass'=>$data['psw'],
    'email'=>$data['uname'],
  ));
}

 ?>
