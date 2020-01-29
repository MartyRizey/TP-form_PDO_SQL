<?php

  // fonction de sélection du champ 'email' et 'password' en Bdd. Cette fonction est appelée par le fichier 'GetConnexDatas_ctrl.php'.
  function datasSelectBdd() {

    require '../inc/connex_bdd.php';    

    // requête de selection des champs 'password' et 'email' dans la table 'users'
    $dataSelectFieldsBdd = 'SELECT password, email FROM users';

    // https://www.php.net/manual/fr/pdo.query.php
    // la méthode 'query()' est une méthode PDO. Elle s'aplique sur un objet PDO ici '$connetBdd' qui stocke ma connection et qui est une instance de PDO.
    // Je lui passe en paramètre ma requête et PDO::query me retourn un jeu de résultats en tant qu'objet PDOStatement que je stocke dans $pdoStmnt.
    $pdoStmt = $connectBdd->query($dataSelectFieldsBdd);

    // https://www.php.net/manual/en/pdostatement.fetchall.php
    // Sur mon objet PDOStatement obtenu j'applique la méthode fetchALL(), qui meretourne un tableau contenant toutes les lignes du jeu de résultats. En faite cela me retourne un tableau indexé numériquement, et à chaque index j'ai un tableau de type associatif et indexé numériquement, donc avec une valeur doublée.
    // https://www.php.net/manual/en/pdostatement.fetch.php
    // En mettant en paramètre de la méthode fetchAll(), PDO::FETCH_ASSOC cela permet de ne selectionner que le tablleau associatif retourné par PDOStatement::fetchAll.
    return $pdoStmt->fetchAll(PDO::FETCH_ASSOC);     

  }
  

