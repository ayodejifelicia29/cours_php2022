<?php
require_once('../inc/functions.php');

 //  Si une langue est passée dans l'url (l'internaute a cliqué sur un lien), on enverra cette langue dans le cookie. 
  
 if(isset($_GET['langue'])){
    $langue = ($_GET['langue']);
    jeprint_r($langue);
     jevar_dump($langue);
}else if (isset($_COOKIE['langue'])) { // sinon si on a reçu un cookie appelé langue alors la valeur du site aura la valeur de la langue
    $langue = $_COOKIE['langue'];
    jeprint_r($langue);
} else { //sinon par défaut
    $langue = 'fr';
    jeprint_r($langue);
}
// Envoie du cookie avec l'info sur la langue à l'intérieur

$expiration = time() + 365*24*60*60; // ex/ va nous donner la date actuelle exprimée en secondes
//time nous donne la date du jour depuis le début de UNIX (1970), date exprimée en secondes
  jeprint_r($expiration);  // j'ajoute à la date du jour les données d'une année en secondes
  setcookie('langue', $langue, $expiration, ); // fonction qui fabrique le cookie, ce cookie est appelé langue avec la valeur de $langue et la valeur de $expiration
  
    //Il n'existe pas de fonction prédéfinie quii permette de supprimer un cookie. Pour rendre un cookie invalide, on utilise setcookie() avec le nom concerné et en mettant une date d'expiration à 0 ou antérieure à la date actuelle
?> 


<!doctype html>
<html lang="fr">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours_PHP2022- Cookies</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body class="bg-light">
    <!-- JUMBOTRON -->
    <div class="jumbotron bg-dark text-white text-center">
        <h1 class="display-3">Cours_PHP2022 - Cookies </h1>
        <hr>
        <p class="lead ">>La super globale $_COOKIE : un cookie est un petit fichier de 4ko maxi déposé par le serveur web sur le poste de l'internaute et qui contient des informations.</p>
    </div>
               
    <!-- RANGEE PRINCIPALE -->
    <div class="row bg-light">
        <!-- La barre de navigation en include (penser à toujours ajouter le JS en fin de page)    --->
        <?php
        require('../inc/sidenav.inc.php')
        ?>
        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <div class="col-sm-8">
            <main class="container-fuild">
                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center" id="definition">1 - Introduction</h2>
                    <div class="col-sm-12">
                    <p>Les cookies sont autoomatiquement renvoyés au serveur web par le navigateur. Lorsque l'internaute navigue dans les pages concernées par le ou les cookies, PHP permet de récupérer très facilement les données contenues dans un cookie. Non seulement on peut le fabriquer mais on peut aussi le récupérer. Les informations sont stockées dans une superglobale : $_COOKIE. </p>
                  <p class="alert alert-danger w-50 mx-auto">Un cookie étant sauvegardé sur le poste de l'internaute, il peut être modifié, détourné ou volé !!!! On n'y met donc AUCUNE information sensible, comme les références bancaires, le numéro de sécu, le mot de passe, ni même le contenu d'un panier d'achat. </p>
                  <div class="w-75 text-center mx-auto">
                      <!-- / ON envoie la langue choisie par l'URL : la valeur "fr" par exemple est récupérée dans la superglobale $_GET -->

                        <a href="?langue=fr" class="btn btn-primary">Français</a>-
                        <a href="?langue=es" class="btn btn-success">Espagnol</a>-
                        <a href="?langue=it" class="btn btn-danger">Italien</a>-
                        <a href="?langue=ru" class="btn btn-warning">Russe</a>

                        <?php
                          echo "<hr><br><h3>Langue du site :  $langue</h3>";
                          echo time() . " : la date du jour exprimée en secondes depuis le 1er janvier 1970."
                       
                        ?>
                      </div>
                    </div><!-- fin de la col -->
                 </div> <!-- fin de la rangée -->
           <hr>
           <br> <br>
           </main>
           </div><!-- FIN DE LA CONTENU PRINCIPALE col-8  -->
        



    
        </div> <!-- FIN DU RANGEE PRINCIPAL (row) -->
   
    <!-- LE FOOTER EN REQUIRE -->
    <?php
    require("../inc/footer.inc.php")
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

    <!-- le js pour la navigation  -->
    <script src="../inc/sidenav.js"></script>

</body>

</html>
