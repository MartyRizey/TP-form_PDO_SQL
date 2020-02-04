<?php

require_once '../inc/connex_bdd.php';
require_once '../modeles/insertDatasRegistration_bdd.php';
require_once '../modeles/selectDatasReg_bdd.php';

// [x][a]: Créer une table 'inscription' en Bdd.
// [x][b]: Récupérer les données du formulaire d'inscription.
// [x][d]: Requête d'insertion des données du formulaire d'inscription en Bdd. (créer un fichier 'insertDatasRegistration_bdd.php' pour la requête dans le dossier 'modeles').
// [x][e]: Requête de selection des données dans la bdd (pour pouvoir comparer le contenu en Bdd avec la saisie de l'utilisateur).
// [x][f]: faire un test pour savoir SI le speudo ou le password existent dèjà en Bdd, SINON insérer les données en Bdd. 
// TODO [x][c]: Hacher le mot de passe avec password_hash(). 
//              └> [x] Le stocker en Bdd via une requête d'insertion en Bdd.
//              └> [ ] Vérifier à la connexion que le password saisie dans le formulaire de connexion correspond avec le mot de passe hacher en Bdd avec password_verify().

// Je récupére les données et les stocks dans des variables.
// $birthday = htmlspecialchars(trim($_POST['birthday']));
$pseudo   = trim(filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_FULL_SPECIAL_CHARS)); 
$birthday = trim(filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$email    = trim(filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL, FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$password = trim(filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS));

// J'appel et j'exécute la fonction 'selectDatasReg()' qui est dans le 'fichier selectDatasReg_bdd.php' et stock le résultat de ma requête qui est un objet dans $rowsDatasReg.
$rowsDatasReg = selectDatasReg($connectBdd);  

foreach($rowsDatasReg AS $usersDataReg){

  // si les variable $pseudo et $userDataReg ne sont pas vides. Je rentre dans la condition.
  if(!empty($pseudo) && !empty($usersDataReg)) {
    // si la valeur saisie correspond à la propriété 'pseudo' de mon objet $userDataReg càd si elle est déjà présente en Bdd.
    if($pseudo === $usersDataReg->pseudo) {

      // Si il y a correspondance alors on retourne sur la page index.php             
      header('Location: ../index.php');

    } else {

      // Sinon on continue le déroulement du programme.
        
      // permet d'isoler l'arobase dans l'email.
      $arobaseContentEmail = substr(strstr($email, '@'),0,1);    

      if(!empty($email) && $arobaseContentEmail == '@') {         

        // j'isole la 1er lettre du password.
        $firstLetterPass = substr($password,0,1);        
 
        // SI $password existe ET SI $password n'est pas vide ET SI sa longueur est sup 24 ET SI la 1er lettre et différente de '<', je rentre dans la condition.
        if(isset($password) && !empty($password) && strlen($password < 24) && ($firstLetterPass != '<')){      

          // créer un password haché afin de le cripter
          $pwdHash = password_hash($password, PASSWORD_DEFAULT, ['cost' => 14]);
          // On passe en paramètre de l'appel à la fonction le mot de passe haché ($pwdHash)
          insertDatasRegistration($connectBdd, $pseudo, $birthday, $email, $pwdHash);
          exit();          

        } else {       
          header('Location: ../views/404_error.php');     
        }

      } else {
        header('Location: ../views/404_error.php');
      }     
    }

  } else {

    echo 'Les champs du formulaire ne sont pas remplis';    
    
  }

}
