# A regarder ou A mettre en place

> Voir un formulaire avec AJAX.

- <https://openclassrooms.com/fr/courses/1567926-un-site-web-dynamique-avec-jquery/1569693-cas-concret-un-formulaire`>

> Configuration des erreurs

- <https://www.php.net/manual/en/function.ini-set.php>

  └>  <https://www.php.net/manual/en/ini.list.php> : `ini_set('display_errors', true);`

- <https://www.php.net/manual/en/function.error-reporting.php>

  └> <https://www.php.net/manual/en/errorfunc.configuration.php#ini.error-reporting> : `error_reporting(E_ALL);`

> Les exceptions

- <https://www.php.net/manual/fr/language.exceptions.php> : `try` et `catch`.

> Sécuriser les password
└> <https://www.grafikart.fr/tutoriels/password-hash-1132>

- Essaie dès maintenant de hacher les passwords etc, c'est vraiment important, même pour des test il est préférable de hacher/crypter les passwords.

  - `password_hash`   => <https://www.php.net/manual/fr/function.password-hash>
  - `password_verify` => <https://www.php.net/manual/fr/function.password-verify.php>
.
  ```
  Oui tu peux stocker le hashage dans une variable et ensuite mettre cette variable dans ta requête sql afin d'avoir le mdp hasher, après ton champ password en BDD doit être de type varchar
  avec une taille de 254 pour être sur que la totalité de la chaine de caractère soit enregistré.

  password_verify tu l'utilise quand l'utilisateur se connecte, pas de cette façon
  ```
  ```
  Exemple :
  ---------
  // echo password_hash('Doe', PASSWORD_DEFAULT, ['cost' => 16]);
  // echo var_dump(password_verify('Doe', '\$2y$16$N0FJU3eDl1N966EPlWFB0eYbAAu5tV7d1vIoY.jdAVgPiBcdjDQh6'));

  // fonction de hachage du mot de passe.
  function passwordHash($password){
    // $_POST['password'] = 'Doe';
    // $password = $_POST['password'];
    $pwdHach = password_hash($password, PASSWORD_DEFAULT, ['cost' => 16]);
    $pwdVerify = password_verify($password, $pwdHach);
    return $pwdVerify;
  }
  echo passwordHash('Athur');
  ```

> Accès aux fichiers 

**Avec des _`Constantes`_.**

- Corriger les `__DIR__`, utiliser des `Constantes` à la place.

    *Exemples :*

    ```
    // Define globale du site
    define('ROOTPATH', "http://".$_SERVER['SERVER_NAME']."/dbu_test/"); // Update folder name if necessary
    define('FORUM', ROOTPATH.'forum/');
    define('TITRESITE', "Dragon Ball Universe");
    define('LAST_URL', "http://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']);

    // Define de dossier pour les includes etc
    define('TIMTHUMB', ROOTPATH.'timthumb/timthumb.php?src=');
    define('JSDIR', ROOTPATH.'includes/js');
    define('TOOLTIP', ROOTPATH.'includes/tooltip');
    define('FUNCTION_DIR', './includes/function');
    define('ARRAY_DIR', './includes/array');
    define('BBCODE_DIR', './includes/bbcode/');
    define('BACK_DIR', '../');
    ```

**Require.** [x]

- Utiliser plutot `require_once` que `require` pour éviter d'inclure plusieurs le même fichier.

> Insertion des données en Base de données.

- Attention au niveau Bdd, ne pas utiliser `htmlentities` qui transforme les accents `è` en entité html `&eacute;` mais plutot `htmlspecialchars`.

> **[x]** Remplacer => \$email = htmlspecialchars((trim($_POST['email'])));

- Par ça : `filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);`
  .
  - filter_input => <https://www.php.net/manual/en/function.filter-input.php> **/** <https://www.php.net/manual/en/filter.filters.validate.php> **/** <https://www.php.net/manual/en/filter.filters.sanitize.php>
  .

> Architecture MVC ... Repos formation O'clock _Kripton_

- <https://github.com/O-clock-Krypton/s06-e02-support-mvc-thibautmassetstiegler>
- <https://github.com/O-clock-Krypton/s06-e02-support-mvc-thibautmassetstiegler/blob/master/.htaccess>
