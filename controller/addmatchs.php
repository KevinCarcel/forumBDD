<?php
if(session_status() !== PHP_SESSION_ACTIVE) session_start(); 
 
require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();

date_default_timezone_set("Europe/Paris");

//creation requete
$req = "SELECT sujets.id_Sujet, sujets.nom_Sujet, sujets.id_User, utilisateur.nom_User, utilisateur.prenom_User, sujets.date_Sujet
FROM sujets
JOIN utilisateur ON utilisateur.id_User = sujets.id_User
WHERE id_Categorie = 3 order by id_Sujet";

$res = $con->query($req);
$lignes = $res->fetchAll();

if ($_SERVER["REQUEST_METHOD"] === "POST"){
$sujet = $_POST["addSujet"];
$dateNow = new DateTime();
if($sujet == '') {
header('refresh:0;url=../views/matchs.php');
} else {
$req=$con->prepare('INSERT INTO sujets(nom_Sujet, id_User, id_Categorie, date_Sujet) VALUES (?,?,?,?)');
$req->execute(array($sujet,$_SESSION['idUtilisateur'],3,$dateNow->format('d/m/y à H:i:s')));
header('Refresh:0;url= ../views/matchs.php');

}
}