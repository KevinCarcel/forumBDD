<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php
require_once "../includes/header.php" ?>


  <!-- Debut Main -->
  <main class="mainEnregistrer">
    <div class="titre">
      <h1>S'ENREGISTRER</h1>
    </div>
    <!-- Debut Form -->
    <form action="../views/connexion.php" id="formulaireEnregistrer" method="get">
      <img src="../image/bg1.jpg" alt="bg1" class="imgForm">


      <label for="nom">Votre nom :</label>
      <input type="text" name="nom" placeholder="Savidan" class="elem-form" id="nom">
      <span id="erreur1"></span> <br>



      <label for="prenom">Votre prénom :</label>
      <input type="text" name="prenom" placeholder="Steve" class="elem-form" id="prenom">
      <span id="erreur2"></span> <br>



      <label for="mail">Votre adresse mail :</label>
      <input type="text" name="mail" id="mail" class="elem-form" placeholder="SSavidan@gmail.fr">
      <span id="erreur3"></span> <br>



      <label for="mdps">Votre mot de passe :</label>
      <input type="text" name="mdps" id="mdps" class="elem-form" placeholder="********">
      <span id="erreur4"></span><br>



      <label for="cMdps">Confirmez votre mot de passe :</label>
      <input type="text" name="cMdps" id="cMdps" class="elem-form" placeholder="********">
      <span id="erreur5"></span> <br>


      <input type="submit" class="button" value="S'enregistrer" id="submit">

    </form>
  </main>
  <!-- DEBUT FOOTER -->
  <?php
require_once "../includes/footer.php" ?>
</body>

</html>