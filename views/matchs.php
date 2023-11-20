<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php
require_once "../includes/header.php" ?>


  <main class="mainSujet">
    <main class="mainForum">
      <div class="bonjour">
        <p id="bonjour1"></p>
        <p id="bonjour2"></p>
        <p id="bonjour3"></p>
      </div>
      <div class="titre">
        <h1 class="h1Modif">MATCHS</h1>
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