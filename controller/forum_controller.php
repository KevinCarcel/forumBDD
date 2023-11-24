<?php

// début de la session pour mettre les indications en cas de réussite ou d'erreur
session_start();

require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();

//creation requete
$req = $con->query ('SELECT * FROM utilisateur');
$donnees = $req ->fetch();

$prenom = $donnees['prenom_User'];
$nom = $donnees['nom_User'];

$bjr1 = 'Bienvenu ' .$prenom." ".$nom;

?>