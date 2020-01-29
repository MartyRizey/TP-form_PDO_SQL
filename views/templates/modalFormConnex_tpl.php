
<!-- Après avoir cliqué sur le bouton 'Connexion' dans la NavBar j'arrive ici -->

<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Me connecter</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body"> 
        <form action="Controlers/GetConnexDatas_ctrl.php" method="POST">

          <div class="input_form">
            <label for="mail"></span>Votre email : </label> 
              <input type="email" name="email" id="mail" placeholder="johnDoe@mail.fr" required />
            <label for="pass">Votre mot de passe : </label> 
              <input type="password" name="password" id="pass" placeholder="mot de passe" required />
          </div>    
          <br>

          <!-- Modal footer -->
          <div class="modal-footer">
            <!-- Ici je soumet mon formulaire, les données sont transmisent au fichier qui est en valeur de l'attribut 'action' dans la balise <form>et elles seront transmisent en POST comme indiqué par la valeur de l'attribut 'method' -->
            <button type="submit" class="btn btn-primary">Login</button>
            <!-- <input type="submit" class="btn btn-primary" value="Login"/> -->
          </div>

        </form>        
      </div>

    </div>
  </div> 
</div>

<?php





