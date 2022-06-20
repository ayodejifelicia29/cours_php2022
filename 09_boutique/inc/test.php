<?php
$host ='localhost';
$database ='site';
$user ='root';
$psw ='root';

$pdoSITE =new PDO('mysql:host=' .$host.';dbname='.$database,$user,$psw);
$pdoSITE->exec("SET NAMES utf8");
//echo'coucou';
$requete =$pdoSITE->query("SELECT *FROM membre");
$ligne=$requete->fetch(PDO::FETCH_ASSOC);

require_once('functions.php');
jeprint_r($requete);
echo "<p> Les infos de notre premier membre sont : </p>";

?>