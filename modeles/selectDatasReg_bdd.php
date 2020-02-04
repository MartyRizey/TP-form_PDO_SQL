<?php

function selectDatasReg($connectBdd) {

  // requête pour récupérer les valeurs des champs $speudo, $email et $passHash en Bdd.
  $getDatasReg = "SELECT pseudo, passHash, email FROM users_registred";

  $pdoStmt = $connectBdd->query($getDatasReg);

  // Je retourne le jeu de résultat sous forme d'objet, que je pourrais utiliser dans le fichier 'getInscriptionDatas_ctrl.php' ligne 27.
  return $pdoStmt->fetchAll(PDO::FETCH_OBJ); 

}