<?php
// début de la session pour mettre les indications en cas de réussite ou d'erreur
    session_start();
    require_once "../includes/connexiondb.php";
    $con = connectdb();


    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        //création des variables pour stocker les données des champs
        $nom= $_POST['nom'];
        $prenom= $_POST['prenom'];
        $mail= $_POST['mail'];
        $mdps= $_POST['mdps'];
        $cMdps= $_POST['cMdps'];
        $photo= $_FILES['photo']['name'];
        $regnom= '/^[a-zA-Z]{3,}$/';
        $regprenom = '/^[a-zA-Z]{3,}$/';
        $regmail=  '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
        $regmdps= '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[#\+\-\^\[\]]).{8,}$/';
    
   // voir si l'adresse mail existe déjà dans la base de donnée avec une requête préparée
    $mailExist = $con->prepare('SELECT * FROM utilisateur WHERE mail_User=?');
    $mailExist->execute([$mail]);
    $utilisateurMail = $mailExist->fetch();

    // hachage mot de passe
    $passHash = password_hash($mdps, PASSWORD_DEFAULT);
    //verif nom
    if (!preg_match($regnom, $nom) || $nom == "") {
        $_SESSION['erreur1'] = 1;
        header("Refresh:0; url= ../views/enregistrer.php");

    } else if (!preg_match($regprenom, $prenom) || $prenom == "") {
        $_SESSION['erreur2'] = 1;
        header("Refresh:0; url= ../views/enregistrer.php");

    } else if (!preg_match($regmail, $mail) || $mail == "") {
        $_SESSION['erreur3'] = 1;
        header("Refresh:0; url= ../views/enregistrer.php");

    } else if ($utilisateurMail) {
        $_SESSION['erreur4'] = 1;
        header("Refresh:0; url= ../views/enregistrer.php");
        
    } else if (!preg_match($regmdps, $mdps) || $mdps == "") {
        $_SESSION['erreur5'] = 1;
        header("Refresh:0; url= ../views/enregistrer.php");

    } else if ($mdps != $cMdps) {
        $_SESSION['erreur6'] = 1;
        header("Refresh:0; url= ../views/enregistrer.php");

    } else if ($photo = '') {
        $_SESSION['erreur7'] = 1;
        header("Refresh:0; url= ../views/enregistrer.php");
    // Déplacez le fichier téléchargé vers le répertoire spécifié
    $target_directory = "../image/photo"; 
    $target_file = $target_directory . basename($_FILES['photo']['name']);
    }
     if(move_uploaded_file($_FILES['photo']['tmp_name'], $target_file)) {
        // Fichier déplacé avec succès, procédez à l'insertion dans la base de données
        $req = $con->prepare("INSERT INTO utilisateur (nom_User,prenom_User,mail_User,mdp_User,lien_Image) VALUES (?,?,?,?,?)");
        $req->execute(array($nom, $prenom, $mail, $passHash,$target_file ));
        $_SESSION['erreur1'] = 0;
        $_SESSION['erreur2'] = 0;
        $_SESSION['erreur3'] = 0;
        $_SESSION['erreur4'] = 0;
        $_SESSION['erreur5'] = 0;
        $_SESSION['erreur6'] = 0;
        $_SESSION['erreur7'] = 0;
        $_SESSION['success'] = 1;
        header('Location:../views/connexion.php');
        exit;
    }
}
if (isset($_POST['reset'])) {
	$_SESSION['erreur1'] = 0;
	$_SESSION['erreur2'] = 0;
	$_SESSION['erreur3'] = 0;
	$_SESSION['erreur4'] = 0;
	$_SESSION['erreur5'] = 0;
	$_SESSION['erreur6'] = 0;
    $_SESSION['erreur7'] = 0;
	$_SESSION['success'] = 0;
	header("Refresh:0; url= ../views/enregistrer.php");
}
?>