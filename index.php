<?php

  // https://www.php.net/manual/en/function.session-start.php
  // session_start doit-être placé en haut de votre page de code. Cela permet de passer des informations dans le tableau $_SESSION et de les rendre accèssible partout dans le code. 
  session_start();

  /**
   * https://www.php.net/manual/fr/function.ini-set.php
   * https://www.php.net/manual/fr/errorfunc.configuration.php#ini.display-errors   * 
   */   
  ini_set('display_errors', true);
  // https://www.php.net/manual/fr/function.error-reporting.php
  error_reporting(E_ALL);

  // require './inc/folderPathConstant.php';
  require_once __DIR__ . '/views/home.php';

  

  

  