<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php
require_once "../includes/header.php" ?>
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
        <h1 class="h1Modif">AUTRE</h1>
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

            <tr>
              <td><a href="../views/sujetJoueurs.php" class="linkTab">1</a></td>
              <td>Nom Sujet</td>
              <td><a href="../views/sujetJoueurs.php" class="linkTab">24/10/2023</a></td>
              <td><a href="../views/sujetJoueurs.php" class="linkTab">Kévin</a></td>
            </tr>

            <div class="addSujet">
              <input type="text" class="fieldAdd" id="fieldAdd" placeholder="Ajoutez un sujet">
              <input type="submit" value="Ajouter" id="submit" class="button">
            </div>
          </table>
        </div>

      </div>



    </main>

    <?php
require_once "../includes/footer.php" ?>

</body>

</html>