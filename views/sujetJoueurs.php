<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php
require_once "../includes/header.php" ?>


  <main class="sujet">
    <div class="titre">
      <h1 class="h1Modif">SUJETS</h1>
    </div>
    <div class="titre">
      <h2 id="sujetName"></h2>
    </div>
    <div class="fullBoxCom">
      <div class="titreBoxCom">
        <h2 class="titreComStyle">Boite de commentaires</h2>
      </div>
      <div class="boxCom" id="boxCom">
        <p><span class="ita">27/10/2023 à 23:12 - </span><span class="red">Jean-Claude :</span> Lorem, ipsum dolor sit
          amet
          consectetur
          adipisicing elit. Ea,
          sed
          blanditiis at cumque quasi
          magni quis
          obcaecati libero laudantium, necessitatibus totam quos?</p>

        <p><span class="ita">27/10/2023 à 22:40 - </span><span class="red">Lucien :</span> Lorem, ipsum dolor sit amet
          consectetur adipisicing elit. Ea, sed
          blanditiis at cumque quasi magni
          quis
          obcaecati libero laudantium, necessitatibus totam quos?</p>

        <p id="comAuto"></p>
      </div>
      <div class="addCom">
        <input type="text" class="addComField" id="addComField">
        <input type="submit" value="Ajouter" id="submitCom" class="button">
      </div>
    </div>
  </main>

  <?php
require_once "../includes/footer.php" ?>
</body>

</html>