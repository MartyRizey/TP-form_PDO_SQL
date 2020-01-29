<?php

  // https://www.php.net/manual/en/function.session-start.php
  // session_start doit-être placé en haut de votre page de code. Cela permet de passer des informations dans le tableau $_SESSION et de les rendre accèssible partout dans le code. 
  session_start();

  echo 'page index.php <br>';

  require __DIR__ . '/views/home.php';

  

  