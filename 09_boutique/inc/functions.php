<?php
//1-fonction print-r
function jeprint_r($mavariable){
    echo "<small class=\"bg-primary text-white p-2\">print_r :</small><pre class=\"alert alert-primary w-50\">";
    print_r($mavariable);
    echo "</pre>";
}

////2- Fonction pour exécuter les prepare()////
function executeRequete($requete, $parametres = array()) {  // utile pour toutes les requêtes 1/ la requête 2/ fabrication du tableau avec les marqueurs
    foreach ($parametres as $indice => $valeur) { // boucle foreach
        $parametres[$indice] = htmlspecialchars($valeur); // opur éviter les injections SQL
        global $pdoSITE;// "global"  va nous permet d'accéder à la variable $pdoSITE et de dire qu'elle devient global du fichier init.inc.php
        $resultat=$pdoSITE->prepare($requete);//puis on prepare la requete
        $succes =$resultat->execute($parametres); //Et on éxecute celle-ci
        if($succes === false){
            return false; //Si la requete ne s'execute pas
        }else{
            return $resultat;
        }//fin if else
        }
}//fermeture de la fonction executeRequete

?>