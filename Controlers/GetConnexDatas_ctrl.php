<?php

  session_start();
  require '../modeles/selectDatas_bdd.php';

  /**
   * https://www.php.net/manual/fr/function.ini-set.php
   * https://www.php.net/manual/fr/errorfunc.configuration.php#ini.display-errors   * 
   */   
  ini_set('display_errors', true);
  // https://www.php.net/manual/fr/function.error-reporting.php
  error_reporting(E_ALL);
  // include("file_with_errors.php");

  // htmlspecialchars() évite les failles XSS.
  // trim() Supprime les espaces (ou autres caractères) du début et de la fin d'une chaîne
  $email    = htmlspecialchars(trim($_POST['email']));  
  $password = htmlspecialchars(trim($_POST['password']));

  // Pour isoler le symbole arobase '@'.
  /**
   * // strstr() trouve la première occurence dans une chaîne, ici ce sera dans la valeur de $email on cherche @, cela retournera une string à partir de @ avec ce qui suit. Ex: @gmail.com
   * $var1 = strstr($email, '@');
   * // substr() retourne un segment de chaîne contenu dans $var1 entre l'emplacement 0 et 1, donc le premier caractère.
   * $symbArobase = substr($var1, 0, 1);
   *  OU
   * $symbArobase = substr(strstr($email, '@'),0 ,1);
   **/  

  // avec tableau
  /**
   * echo '<pre>'; print_r($arr = str_split($email)); echo '</pre>';   
   * if(in_array("@", $arr)) { echo 'YES ....'; } else { echo 'Ouuuuu la bouse !!!'; }
   */
  // Si $email est différent de vide (donc si $email contient bien une valeur) et si 
  if(!empty($email) && substr(strstr($email, '@'),0 ,1) === '@') {
 
    // substr() Retourne une partie d'une chaîne
    $firstLetterEmail = substr($email,0,1);
    $firstLetterPass = substr($password,0,1);

    // Si la valeur contenue dans $firstLetterPass est différente de < et si la longueur de la valeur contenue dans $password et inférieur à 12 alors je rentre dans la condition.
    if(($firstLetterPass != '<') && (strlen($password) < 12)) {

      // [x]: faire un appel à une fonction de selection des données dans le fichier 'selectDatas_bdd.php' en Bdd, pour récupérer les champs concernés.  
      $getDatasToBdd = datasSelectBdd();

      foreach($getDatasToBdd AS $datasConnexModal) {

        $dataConnexModal = $datasConnexModal;       

        // [x]: Comparer les données saisies avec celles en Bdd et les stocker dans une SESSION.        
        if(($email === $dataConnexModal['email']) && ($password === $dataConnexModal['password'])) {   

          $_SESSION['email'] = $dataConnexModal['email'];
          $_SESSION['password'] = $dataConnexModal['password'];

          // [x]: renvoie sur une page spécifique contenant l'utilisateur connecté en SESSION. Créer une page vue spécifique.
          header('Location: ../views/userHome.php');

          // pour être sur que je m'arrête ici et ne pas exécuter le reste je fait un exit();
          exit();

        } else {

          // [x]: faire une page 404 ou redirigé vers l'index.php sans Login.          
          header('Location: ../views/404_error.php');        

        }
      }   
    } else {

      // [x]: faire une page 404 ou redirigé vers l'index.php sans Login.
      header('Location: ../views/404_error.php'); 

      }  
  }


  


