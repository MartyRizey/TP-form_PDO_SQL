<?php

// je récupére dans les paramètres de ma fonction les valeurs passées dans l'appel de cette fonction dans le fichier Ctrl_InsertDatasReg.php 
// c'est à dire la connection à la Bdd ($connectBdd) ainsi que les valeurs contenues dans $pseudo, $birthday, $email et le mot de passe hacher, $pwdHash. 
function sqlInsertDatasReg($connectBdd, $pseudo, $birthday, $email, $pwdHash){

  // j'insére dans la table 'users_registred' dans les colonnes pseudo, birthday, email, passHash certaines valeurs ?, ?, ?, ?. 
  // Il y a autant de point d'intérrogation que de colonne, ou de valeur à insérer dans les colonnes.
  $insertDatasFormReg = "INSERT INTO users_registred (pseudo, birthday, email, passHash) VALUES (?, ?, ?, ?)";

  // Je me connecte ($connectBdd) et applique la méthode PDO::prepare sur mon objet PDO de connection.
  // et je passe en paramètre de prepare() la requête. Ceci deviendra un objet de type PDOStatement. 
  // PDO::prepare - Prépare une instruction pour l'exécution et retourne un objet d'instruction.
  // https://www.php.net/manual/en/pdo.prepare.php
  $pdoStmt = $connectBdd->prepare($insertDatasFormReg);

  // PDOStatement::bindParam - Lie un paramètre au nom de variable spécifié. 
  // https://www.php.net/manual/en/pdostatement.bindparam - https://www.php.net/manual/en/pdo.constants.php
  // càd que le 1er paramètre de la méthode bindParam() correspond au 1er point d'intérogation.
  //     que le 2iè paramètre correspond à la variable qui contient la valeur à lier au 1er point d'intérogation.
  //     que le 3iè parramètre (data_type) représente le type de données SQL CHAR, VARCHAR ou une autre chaîne.   
  $pdoStmt->bindParam(1, $pseudo, PDO::PARAM_STR);
  $pdoStmt->bindParam(2, $birthday, PDO::PARAM_STR);
  $pdoStmt->bindParam(3, $email, PDO::PARAM_STR);
  $pdoStmt->bindParam(4, $pwdHash, PDO::PARAM_STR);

  // PDOStatement::execute - Exécute une instruction préparée.
  // https://www.php.net/manual/en/pdostatement.execute.php
  $pdoStmt->execute();

}