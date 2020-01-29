<?php 

  session_start(); 
  require '../inc/logOutSession.php';

  // [x] : faire un bouton de déconnexion avec un retour sur home.php
  
  //  echo '<pre>';
  //  print_r($_SESSION);
  //  echo '</pre>'; 

?>
  
<!-- Ici je dis que si ma SESSION existe et qu'il y a quelque chose dans $_SESSION['email']-->
<?php if(isset($_SESSION) && !empty($_SESSION['email'])): ?>    

  <!-- 
    J'affiche un bouton qui me permettra de me déconnecter si je le souhaite de ma SESSION, via une fonction logOut() que j'appellerais en cliquant dessus.  
    Je passe les 2 valeurs concernées dans l'appel à la fonction logOut().    
    -->
  <form action="" method="POST">
    <button type="submit" name="button" value="<?php logOut($_SESSION['email'], $_SESSION['password']); ?>">Déconnexion</button>      
  </form>

  <h2>Vous êtes connecté avec l'email : <em style="color:blue"><?= $_SESSION['email'] ?></em>.</h2>
  
  <?php else: 
    
    // Une fois la fonction exécutée je suis redirigé vers index.php
    header('Location: ../index.php');

  ?>      

<?php endif; ?>


<div class="return_cta" style="margin-top:2em">
  <a href="../index.php" 
    style="padding: 0.5em; 
            border:solid 1px blue; 
            border-radius:5px; 
            margin-left:1em; 
            text-decoration:none;
            background-color:blue;
            color: white;
            box-shadow: 2px 2px 2px silver;
            font-family: sans-serif" > Retour 
  </a>
</div>      

    

     
