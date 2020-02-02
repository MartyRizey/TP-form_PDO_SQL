<?php
    
    echo '└> fichier :  /views/home.php - /views/templates/header_tpl.php - navBar_tpl.php - modalFormConnex_tpl.php';
    
    require_once __DIR__ . '/templates/doctype_tpl.php';  
    require_once __DIR__ . '/templates/header_tpl.php';    

?>    

<p style="margin-top: 0.5em; font-style:italic"><?= date('l d F Y'); ?></p>
<h1 style="text-align:center; margin:2em 0 2em 0">Page HOME</h1>
<p style="text-align:justify; font-family:sans-serif; margin-bottom:5em">Si la page vous parez fade ... ne cherchez pas à savoir si je suis un artiste raté. Ici l'objectif n'est pas de faire du Web Design ni de jolies pages, mais essentiellement du Back-end. De comprendre est d'appliquer la transmission de données à travers un <em style="color:#0069D9; font-weight:bold">formulaire de connexion</em>, un <em style="color:#138496; font-weight:bold">formulaire d'inscription</em> et aussi utiliser une <em style="color:green; font-weight:bold">base de données</em> pour stocker et gérer les données.</p>





<?php    require_once __DIR__ . '/templates/footer_tpl.php'; ?>