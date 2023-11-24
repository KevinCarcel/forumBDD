<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php
require_once "../includes/header.php" ?>
  <?php require_once "../controller/addsujet.php";?>
  <?php require_once "../controller/forum_controller.php" ?>


  <main class="mainSujet">
    <main class="mainForum">
      <div class="bonjour">

        <?php
      echo "<p id='bonjour1'>$bjr1</p>";
    ?>
        <?php
      $date = new DateTime();
      $dateJour = "Nous sommes le ". $date->format("d/m/Y") ."";
      $_SESSION["dateJour"] = $dateJour;
    echo "<p id='bonjour2'>$dateJour</p>";
    ?>

        <?php
      date_default_timezone_set("Europe/Paris");
      $date = new DateTime();
      $heureJour = "Vous vous êtes connectés à : ". $date->format("H:i:s") ."";
      $_SESSION["heureJour"] = $heureJour;
    echo "<p id='bonjour3'>$heureJour</p>";
    ?>
      </div>
      <form method="POST">
        <input type="submit" name="deco" value="Deconnexion" class="button" id="deco"> <!-- Bouton de déconnexion -->
      </form>
      <?php
  
if (isset($_POST['deco'])) {
    session_destroy();
    header('location:../accueil.php');
     
}
?>
      <div class="titre">
        <h1 class="h1Modif">JOUEURS</h1>
      </div>
      <div class="fullSujet">
        <div class="imgSujet">
          <img src="../image/ekip.jpg" class="imgTablo" alt="ekip">
        </div>
        <div class="tableau">
          <table class="fullTablo" id="fullTablo">
            <tr>
              <th class="caseTablo">#</th>
              <th class="caseTablo">Sujet</th>
              <th class="caseTablo">Date</th>
              <th class="caseTablo">Auteur</th>
            </tr>

            <?php
     //boucles foreach pour afficher chaque ligne de la requete 
     foreach($lignes as $ligne){
      echo '<tr>
      <td>'.$ligne['id_Sujet'].'</td>
      <td>'.$ligne['nom_Sujet'].'</td>
      <td>'.$ligne[$dateNow].'</td>
      <td>'.$ligne['prenom_User '.'nom_User'].'</td>
      <td><a href="addsujet.php? id='.$ligne['id_Sujet'].'"></a></td>
    </tr>';
     }
    ?>

            <div class="addSujet">
              <form action="../controller/addsujet.php" method="POST">
                < <input type="text" class="fieldAdd" name="addSujet" id="fieldAdd" placeholder="Ajoutez un sujet">
                  <input type="submit" value="Ajouter" id="submit" class="button">
              </form>
            </div>
          </table>
        </div>

      </div>



    </main>

    <?php
require_once "../includes/footer.php" ?>
</body>

</html>