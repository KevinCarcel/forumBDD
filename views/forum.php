<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php
require_once "../includes/header.php" ?>
  <?php require_once "../controller/forum_controller.php" ?>
  <!-- Debut Main -->
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
    <div class="titre">
      <h1 class="h1Modif">FORUM</h1>
    </div>
    <div class="imgEtForum">
      <div class="centerImg">
        <img src="../image/bg1.jpg" alt="logoVAFC" class="imgForum">
        <img src="../image/ekip.jpg" alt="logoVAFC" class="imgForum">
        <img src="../image/stade.jpg" alt="logoVAFC" class="imgForum">
      </div>
      <div class="fullForum">
        <div class="box1">
          <h2 class="titreSujet">MATCHS</h2>
          <p class="textSujet">Déroulé des matchs , débrief , résultats ...</p>
          <a href="../views/matchs.php"><input type="button" class="goal" value="GO"></a>
        </div>

        <div class="box2">
          <h2 class="titreSujet">JOUEURS</h2>
          <p class="textSujet">Info sur les joueurs , transferts, rumeurs ...</p>
          <a href="../views/joueurs.php"><input type="button" class="goal2" value="GO"></a>
        </div>

        <div class="box3">
          <h2 class="titreSujet">AUTRE</h2>
          <p class="textSujet">Sujet divers , Billeterie , déplacements ...</p>
          <a href="../views/autre.php"><input type="button" class="goal" value="GO"></a>
        </div>
      </div>
    </div>
  </main>

  <?php
require_once "../includes/footer.php" ?>
  <!-- <script src="../Javascript/scriptforum.js"></script> -->
</body>

</html>