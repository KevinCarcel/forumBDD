<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php require_once "../includes/header.php" ?>
  <?php require_once "../controller/connexion_controller.php" ?>


  <main class="mainConnexion">
    <div class="titre">
      <h1>SE CONNECTER</h1>
    </div>

    <form action="../controller/connexion_controller.php" id="formulaireConnexion" method="POST">
      <?php
            if ($_SESSION['success2'] == 1) {
                echo '<p id="success">Tu es déja connecté</p>';
            }
      ?>

      <label for="mailCo">Votre identifiant (e-mail)</label>
      <input type="text" name="mailCo" id="mailCo" class="elem-form" placeholder="SSavidan@gmail.fr">
      <span id="erreurCo1"></span>
      <?php
      if ($_SESSION['erreur8'] == 1) {
          echo '<p id="erreur">identifiant incorrecte</p>';
      }
      ?> <br>

      <label for="mdpsCo">Votre mot de passe :</label>
      <input type="text" name="mdpsCo" id="mdpsCo" class="elem-form" placeholder="********">
      <span id="erreurCo2"></span>
      <?php
      if ($_SESSION['erreur9'] == 1) {
          echo '<p id="erreur">Mot de passe incorrecte</p>';
      }
      ?><br>

      <input type="submit" class="button" value="Se connecter" name="submit" id="submit">
      <input id="submit" class="button" type="submit" name="reset" value="Reset" />

    </form>

  </main>
  <?php
require_once "../includes/footer.php" ?>
</body>

</html>