<?php

// fonction exécutant une requête d'insertion des données du formulaire d'inscription en Bdd.
// Je récupére les données du formulaire d'inscription dans les paramètres de ma fonction via l'appel de celle-ci.
function insertDatasRegistration($connectBdd, $pseudo, $birthday, $email, $pwdHash){

  // j'insére dans la table 'users_regirtred' dans les champs pseudo, birthday, email, passHash certaines valeurs ?, ?, ?, ?
  $insertDatasReg = "INSERT INTO users_registred (pseudo, birthday, email, passHash) VALUES(?, ?, ?, ?)";

  // Je me connecte ($connectBdd) et applique la méthode PDO::prepare sur mon objet PDO de connection.
  // et je passe en paramètre de prepare() la requête. Ceci deviendra un objet de type PDOStatement.
  $pdoStmt = $connectBdd->prepare($insertDatasReg);

  // Je fait correpondre mes paramètres à un nom de variable.
  // https://www.php.net/manual/fr/pdostatement.bindparam.php
  $pdoStmt->bindParam(1, $pseudo, PDO::PARAM_STR);
  $pdoStmt->bindParam(2, $birthday, PDO::PARAM_STR);
  $pdoStmt->bindParam(3, $email, PDO::PARAM_STR);
  $pdoStmt->bindParam(4, $pwdHash, PDO::PARAM_STR);

  $pdoStmt->execute();

  header('Location: ../index.php');
  // Exit('Vous pouvez maintenant vous connecter.'); 

}