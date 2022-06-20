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

    <title>Cours PHP7 - Exercice 1</title>

    <!-- mes styles -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- JUMBOTRON -->
    <div class="jumbotron bg-secondary text-center">
        <h1 class="display-3 pt-3">Cours PHP7 - Exercice 1</h1>
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
   Vous créez un tableau PHP contenant les pays suivants : France, Italie, Espagne, inconnu, Allemagne auxquels vous associez les valeurs Paris, Rome, Madrid, '?', Berlin.

   Vous parcourez ce tableau pour afficher la phrase "La capitale X se situe en Y" dans un paragraphe (où X remplace la capitale et Y le pays).

   Pour le pays "inconnu" vous afficherez "Ca n'existe pas !" à la place de la phrase précédente. 	

 */

                        $pays = array(
                            'France'    => 'Paris',
                            'Italie'    => 'Rome',
                            'Espagne'   => 'Madrid',
                            'inconnu'   => '?',
                            'Allemagne' => 'Berlin'
                        );

                        print_r($pays);
                        echo count($pays);


                        foreach ($pays as $key => $value) {
                            // var_dump($pays);
                            // echo '<hr>';
                            // var_dump($key);
                            // echo '<hr>';
                            // var_dump($value);
                            if ($key == 'inconnu') {
                                echo '<p>Ce pays n\'existe pas !</p>';
                            } else {
                                echo '<p>La capitale ' . $value . ' se situe en ' . $key . '</p>';
                            }
                        }
                        var_dump($value);
                        ?>

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