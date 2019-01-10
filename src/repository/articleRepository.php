<?php

/**
 * Trouver un article d'après son id
 *
 * @param  PDO    $db [description]
 * @param  string $id [description]
 * @return [type]     [description]
 */
function findArticle(PDO $db, string $id)
{
  $req = $db->prepare(
    'SELECT *
     FROM `article`
     WHERE `id` = ?'
   );
   $req->execute([$id]);
   $results = $req->fetch(PDO::FETCH_ASSOC);

   return $results;
 }

 function findLastArticles(PDO $db)
 {
   $req = $db->prepare(
     'SELECT *
      FROM `article`
      LIMIT 3'
    );
    $req->execute([$article]);
    $results = $req->fetch(PDO::FETCH_ASSOC);

    return $results;
 }
