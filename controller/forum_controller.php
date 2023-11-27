<?php
session_start();
require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();

//Trouvez l'utilisateur connecté

if (isset($_SESSION['utilisateur']) && $_SESSION['utilisateur']==1) {

$bjr1 = 'Bienvenue ' .$_SESSION['prenom']." ".$_SESSION['nom'];
} 
?>