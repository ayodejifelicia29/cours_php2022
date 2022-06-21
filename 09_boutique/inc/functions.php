<?php

//// 1- fonction print_r //////
function jeprint_r($mavariable)
{
    echo "<small class=\"bg-primary text-white p-2\">print_r :</small><pre class=\"alert alert-primary w-50\">";
    print_r($mavariable);
    echo "</pre>";
}

//// 2- fonction pour exécuter les prepare()////
function executeRequete($requete, $parametres = array())
{
    foreach ($parametres as $indice => $valeur) {
        $parametres[$indice] = htmlspecialchars($valeur);  //on évite les injections SQL
        global $pdoSITE; // global va nous permettre d'accéder à la variable $pdoSITE et de dire qu'elle devient globale
        $resultat = $pdoSITE->prepare($requete); //puis on prépare la requête
        $succes = $resultat->execute($parametres); // Et on éxecute celle-ci
        if ($succes === false) {
            return false; //Si la requête ne s'execute pas
        } else {
            return $resultat;
        } // fin if else
    }
} // fermeture de la fonction executeRequete
?>
