<?php
// début de la session pour mettre les indications en cas de réussite ou d'erreur
//     session_start();
//     require_once "../includes/connexiondb.php";
//     $con = connectdb();

//     if ($_SERVER["REQUEST_METHOD"] === "POST") {
//     //création des variables pour stocker les données des champs
//     $mailCo= $_POST['mailCo'];
//     $mdpsCo= $_POST['mdpsCo'];

//     // Valider et filtrer les entrées de l'utilisateur 
//     // $email = filter_var($email, FILTER_SANITIZE_EMAIL);

//       // voir si l'adresse mail existe déjà dans la base de donnée avec une requête préparée
//     $mailExist = $con->prepare('SELECT * FROM utilisateur WHERE mail_User=?');
//     $mailExist->execute([$mailCo]);
//     $utilisateurMail = $mailExist->fetch();

// }
?>