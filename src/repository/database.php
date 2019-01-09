<?php

function openDatabase(string $database, string $user, string $password): PDO
{
  return new PDO("mysql:host=localhost;dbname=$database", $user, $password);
}

?>
