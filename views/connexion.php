<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php
require_once "../includes/header.php" ?>


  <main class="mainConnexion">
    <div class="titre">
      <h1>SE CONNECTER</h1>
    </div>

    <form action="../views/forum.php" id="formulaireConnexion" method="get">

      <label for="mailCo">Votre identifiant (e-mail)</label>
      <input type="text" name="mailCo" id="mailCo" class="elem-form" placeholder="SSavidan@gmail.fr">
      <span id="erreurCo1"></span> <br>

      <label for="mdpsCo">Votre mot de passe :</label>
      <input type="text" name="mdpsCo" id="mdpsCo" class="elem-form" placeholder="********">
      <span id="erreurCo2"></span><br>

      <input type="submit" class="button" value="Se connecter" id="submit">

    </form>

  </main>
  <?php
require_once "../includes/footer.php" ?>
</body>

</html>