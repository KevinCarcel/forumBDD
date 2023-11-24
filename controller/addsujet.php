<?php

require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();

//creation requete (pour le infos user)
$req = $con->query ('SELECT * FROM utilisateur');
$response = $con->query ($req);
$lignes = $response->fetchAll();


if(isset($_POST['addSujet'])){

  //création des variables pour stocker les données des champs
$nomSujet = $_POST['nom_Sujet'];
$dateNow = new DateTime();
$prenom = $donnees['prenom_User'];
$nom = $donnees['nom_User'];


//on fait notre requete sql avec le prepare
  $req= $con->prepare('INSERT INTO sujets (nom_Sujet,nom_User) VALUES (?,?)');
  $req->execute(array($nomSujet,$prenom .$nom));
  //retour sur le tableau des services
  // header('location: services.php');
}