<?php
require_once("../inc/functions.php");
?>

<!doctype html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- font google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&display=swap" rel="stylesheet">

    <title>Cours PHP7 - Exercice 2</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- JUMBOTRON -->
    <div class="jumbotron bg-secondary text-center">
        <h1 class="display-3 pt-3">Cours PHP7 - Exercice 2</h1>
    </div>

    <!-- RANGEE PRINCIPALE -->
    <div class="row">
        <!-- La barre de navigation en include (penser à toujours ajouter le JS en fin de page)    --->
        <?php
        require('../inc/sidenav.inc.php');
        ?>
        <!-- ============================================================== -->
        <!-- Contenu principal -->
        <!-- ============================================================== -->
        <div class="col-sm-8">
            <main class="container-fluid">
                <div class="row">
                    <hr>
                    <h2 class="col-sm-12 text-center" id="definition"><u>1 - Exercice</u></h2>
                    <div class="col-sm-12">


                        <?php
                        /*
  1- Créer une fonction qui retourne la conversion d'une date FR en date US ou inversement.
  Cette fonction prend 2 paramètres : une date et le format de conversion de sortie "US" ou "FR". Pour faire cette conversion, vous utilisez la classe DateTime.
	  
  2- Vous validez que le paramètre de format est bien "US" ou "FR". La fonction retourne un message si ce n'est pas le cas.
  
  3- Vous validez que la date fournie est bien une date. La fonction retourne un message si ce n'est pas le cas.
  
 */

                        function convertir($date, $format)
                        {
                            // point 2
                            if ($format != 'FR' && $format != 'US') { // vérification du format de la date
                                return '<p>La date renseignée n\'est pas un format pris en charge.</p>';
                            }

                            // point 3
                            if (!strtotime($date)) { // vérification de la validité de la date
                                return '<p>La date renseignée n\'est pas valide.</p>';
                            }

                            // point 1
                            $date_convert = new DateTime($date);
                            if ($format == 'FR') { // FR en US
                                return $date_convert->format('d/m/Y');
                            } elseif ($format == 'US') { // US en FR
                                return $date_convert->format('Y-m-d');
                            }
                        }

                        echo convertir('31-01-2018', 'US');

                        echo '<hr>';
                        /***
                         * CORRECTION
                         */
                        function afficheDate($date, $format)
                        {
                            // On contrôle d'abord les valeurs reçues :
                            if ($format != 'FR' && $format != 'US') {
                                return '<p>Le format demandé n\'est pas valide.</p>'; // return nous fait quitter la fonction, le reste du code qui suit n'est donc pas exécuté => ici je n'ai donc pas besoin d'un else ou elseif puisque si la condition est true le return 
                            }

                            if (!strtotime($date)) {
                                return '<p>La date est invalide.</p>';
                            }

                            // Traitement de l'affichage de la date :
                            $objetDate = new DateTime($date);
                            if ($format == 'FR') {
                                return $objetDate->format('d-m-Y');
                            } else {
                                return $objetDate->format('Y-m-d');
                            }
                            // return 'test';
                        }

                        echo afficheDate('2018-08-15', 'FR');



                        // A LIRE => http://php.net/manual/fr/function.checkdate.php
                        /**
                         * function validateDate($date, $format = 'Y-m-d H:i:s')
{
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
}
                         */

                        ?>
                    </div>
                </div> <!-- fin de la col -->
        </div> <!-- fin de la row -->
        </main>
    </div> <!-- fin de la col-sm-8 -->
    </div> <!-- fin du row -->
    <!-- LE FOOTER EN REQUIRE -->
    <?php
    require("../inc/footer.inc.php")
    ?>

    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <!-- le js pour la navigation  -->
    <script src="../inc/sidenav.js"></script>

</body>

</html>