
<?php 
  
  require __DIR__ . '\modalFormConnex_tpl.php'; 

?>

<nav id="navBar">
  
  <div id="navBar_links">
    <ul>
      <li><a href="#">Link_1</a></li>
      <li><a href="#">Link_2</a></li>
    </ul>
  </div>

  <div id="navBar_login">    
    <ul>
      <li>
        <!-- 
          Button to Open the Modal. 
          L'attribut data-target="#myModal" ici fonction comme une ancre et appel l'attribut avec l'id="myModal" dans le fichier requis ligne 2.
          -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Connexion</button>
      </li>
      <li>
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="">Inscription</button>
      </li>
    </ul>
  </div>

</nav>