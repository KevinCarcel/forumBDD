<?php

// début de la session pour mettre les indications en cas de réussite ou d'erreur
session_start();

require_once "../includes/connexiondb.php";

// connexion base de donnée
$con = connectdb();


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Récup des variables
    $mail = $_POST["mailCo"];
    $mot = $_POST["mdpsCo"];
    

        // voir si l'adresse mail existe déjà dans la base de donnée avec une requête préparée
        $mailOnlyOne = $con->prepare('SELECT * FROM utilisateur WHERE mail_User=?');
        $mailOnlyOne->execute([$mail]);
        $utilisateurMail = $mailOnlyOne->fetch();

        // Le mot de passe associé au mail 
        $password = 'SELECT * FROM utilisateur WHERE mail_User= "'.$_POST["mailCo"].'"';
        $pass = $con->query($password);
        $passPass = $pass->fetch();

        if(!$utilisateurMail){
            $_SESSION['erreur8'] = 1;
            header("Refresh:0; url= ../views/connexion.php");
        } 

        else if(!password_verify($mot, $passPass["mdp_User"])) {
            $_SESSION['erreur9'] = 1;
            header("Refresh:0; url= ../views/connexion.php");
        } 

        else {
            $_SESSION['erreur8'] = 0;
            $_SESSION['erreur9'] = 0;
            $_SESSION['success2'] = 1;
            header('Location:../views/forum.php');
        }


}
if (isset($_POST['reset'])) {
    $_SESSION['erreur8'] = 0;
    $_SESSION['erreur9'] = 0;
    $_SESSION['success2'] = 0;
    header("Refresh:0; url= ../views/connexion.php");

    
    exit;
}


?>