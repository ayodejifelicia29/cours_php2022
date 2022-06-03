<!doctype html>
<html lang="fr">
  <head>
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
     integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
     
     <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours_php2022 -Introduction</title>
    <!-- mes style -->

    <link rel="stylesheet" href="../css/style.css">
   </head>
  <body class ="bg-dark">
    <div class="jumbotron bg-dark text-white text-center">
      <h1 class="display-3">Cours_php2022</h1>
      <p class="lead">PHP signifie aujourd'hui Hypertext preprocessor</p>
     </div>

       <div class="row">
         <?php
         require('../inc/sidenav.inc.php'); /* ici on appelle le fichier sidenav                                                                              .inc.php */
         ?>
         <!-- =====================================================================
         ===================================================================== -->
         <!-- contenu principal -->
      
         <div class="col-sm-8">
           <main class="container-fluid">
             <div class="row">
               <hr>
               <!-- .h2.col--sm-12.text-center (to get this formulairez) -->
               <h2 class="col-sm-12 text-center"><u> 1-Introduction </u></h2>
               <!-- ouverture de la div -->
               <div class="ol-sm-12 col-lg-4">                                                     
                 <p>Pour parvenir à la réalisation de site dynamiques, nous allons aboder sucessivements les 
                   points suvinants : </p>
                   <ul>
                   <li>De connaite la syntaxe et les caracteristiques du language PHP</li>
                      <li>Les notions essentielles du language sql, permettant
                 la créaction et la gestion d'une bdd et la realisation des requetes</li>
                 <li>Le fonctionnement et la realisation de bdd mysql et les moyens d'y accéder a l'aide
                                de fonctions specialisées de php ou (objet)  </li>
                      </ul>
               </div>
               <!-- fermutute de div -->

               <div class="col-sm-12 col-lg-4">
                 <p>PHP permet en outre de créer des pages  interactives. Une page interactive permet 
                 à un visiteur de saisir  des données personnelle.Ces dernieres sont  ensuite transmises
                   au serveur ,ou elles peuvent rester stockées dans une base de données pour etre diffusées vers 
                   d'autres ulisateurs. Un visiteur peut par exemple , s'enregister et retrouver une page adaptée à
                   ses besions lors d'une visite ultérieure.Il peut aussi envoyer des e-mails et des fichiers 
                   sans avoir à passer par son logiciel de messagerie. En associant toutes ces caracteristiques,
                   il est possible de créer aussi bien des sites d'e-commerces, de rencontres ou des blogs</p>
                </div>
                <!-- fin de la div -->
                <div class="col-sm-12 col-lg-4">
                  <p>Pour contenir la masse d'information collectées, PHP s'appuie généralement sur une base de 
                    données, généralement MYSQL mais aussi SQLite,et sur des serveurs Apache,PHP,MYSQL et Apache
                    forment d'ailleurs le trio ultra dominant sur les serveurs internet. Quand ce trio est associé
                     sur  un serveur à LINUC, on parle de systéme LAMP (Linux, Apache, Mysql et PHP ).PHP est utilisé aujourd'hui
                      par plus des trois quarts des sites dynamiques de la planète et par les trois quarts des
                       grandes entreprises françaises. Pour un serveur Windows, On parle de systèmes WAMP,
                        mais ceci est beaucoup moins courant</p>
                </div><!-- fin de la div -->
              </div><!-- fin  de la row -->
              <div class="row">
               <div class="col-sm-12 col-md-6">
                 <p>Avec le code suivant s'écrit dans un ficher nommé info.php, placé dans le serveur d'évacuation,
                    on obtient toutes les infos sur le PHP éxécuter dans ce serveur. <br>
                    <!-- <code><?php
                      phpinfo();
                      ?></code> --></p>
                      <div class="alert alert-success">
                        <?php
                        echo "  <p> Bienuenue sur le site de cours de PHP7</p>"
                        ?>
                        <?php
                        echo " <p> Aujourd'hui nous somme le ".date("d/m/y")."</p>"
                        ?>
                        </div>
                    </div>
                    <!-- fin  de la div -->
                    <div class="col-sm-12 col-md-6">
                      <h3> Le cycle de vie d'une page PHP</h3>
                      <ul>
                        <li> Envoi d'une requête HTML par le navigateur client ver le serveur du type http://
                          www.monserveur.fr.page.php </li>
                        <li>Interprétation par le serveur du code PHP contenu dans la page appelée</li>
                        <li>Enovoi par le serveur d'un fichier dont le contenu est purement du HTML </li>
                      </ul>
                      <a  class="btn btn-primary btn-lg" href="info.php" role="button"> voir info.php</a>
                    </div>
                    </div>
                    <!-- fin de la row (range) -->
                    <hr>
                    <div class="row">
                      <div class="col-sm-12">
                        <h2 class="text-centet">2-Inclure des fichiers externes </h2>
                        <table class="table table-striped" id="tableau1">
                          <thead>
                            <tr>
                              <th scope="col"> fonction</th>
                              <th scope="col">Description</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>include("nom-fichier.php")</td>
                              <td>Lors de son interpretation par le serveur,cette ligne est remplacée par tous le 
                                contenu du fichier précisé en paramètre ,dont vous fournissez le nom et 
                              éventuellement l'adresse compléte.En cas d'erreur, par exemple si le fichier
                               n'est pas trouvé include () ne génére qu'une alerte (un warning), et le script continue.</td>
                            </tr>
                            <tr>
                              <td>include("nom-fichier.php")</td>
                              <td>A désormais  un comportement identique à include() , à la différence prés qu'en cas 
                              require() provoque une erreur fatale et met fin au script </td>
                            </tr>
                            <tr>
                             <td>include_once</td>
                            <td>Contrairement aux deux précédentes, ces fonctions ne sont pas éxécutées plusieurs fois, 
                              même si elles figurent dans une boucle ou si elles sont déjà éxécutées une fois dans le codequi précède</td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                    <!-- fin de la row (rangée) -->

                    <br><br>
               </main>
               </div>
               <!-- fin de la partie principale,col-8 -->
               <div class="col-sm aside">

               </div>
               <!-- fin de la col -2 -->

      </div>
      <?php
      require('../inc/footer.inc.php');
      ?>
    

     
    <!-- Bootstrap JavaScript Libraries -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
   <!-- mon script  -->
    <script src="../inc/sidenav.js"></script>
  </body>
</html>