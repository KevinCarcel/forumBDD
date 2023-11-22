<?php
require_once "../includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <?php require_once "../includes/header.php" ?>
  <?php require_once "../controller/enregistrer_controller.php" ?>


  <!-- Debut Main -->
  <main class="mainEnregistrer">
    <div class="titre">
      <h1>S'ENREGISTRER</h1>
    </div>
    <!-- Debut Form -->
    <form action="../controller/enregistrer_controller.php" id="formulaireEnregistrer" method="POST"
      enctype="multipart/form-data">
      <img src="../image/bg1.jpg" alt="bg1" class="imgForm">
      <?php
            if ($_SESSION['success'] == 1) {
                echo '<p id="success">Tu es déja inscrit</p>';
            }
      ?>

      <label for="nom">Votre nom :</label>
      <input type="text" name="nom" placeholder="Savidan" class="elem-form" id="nom">
      <span id="erreur1" name="erreurNom"></span>
      <?php
      if ($_SESSION['erreur1'] == 1) {
        echo '<p id="erreur">Nom incorrect ou trop court (3 caractères minimum et sans chiffres) !</p>';
      } 
      ?><br>



      <label for="prenom">Votre prénom :</label>
      <input type="text" name="prenom" placeholder="Steve" class="elem-form" id="prenom">
      <span id="erreur2" name="erreurPrenom"></span>
      <?php
      if ($_SESSION['erreur2'] == 1) {
          echo '<p id="erreur">Prénom incorrect ou trop court (3 caractères minimum et sans chiffres) !</p>';
      } 
      ?><br>


      <label for="mail">Votre adresse mail :</label>
      <input type="text" name="mail" id="mail" class="elem-form" placeholder="SSavidan@gmail.fr">
      <span id="erreur3" name="erreurMail"></span>
      <?php
        if ($_SESSION['erreur3'] == 1) {
          echo '<p id="erreur">Mettre un email valable</p>';
      }
        if ($_SESSION['erreur4'] == 1) {
          echo '<p id="erreur">Le mail est déjà enregistré</p>';
      } 
      ?><br>


      <label for="mdps">Votre mot de passe :</label>
      <input type="text" name="mdps" id="mdps" class="elem-form" placeholder="********">
      <span id="erreur4" name="erreurmdps"></span>
      <?php
        if ($_SESSION['erreur5'] == 1) {
          echo '<p id="erreur">Mettre un mot de passe valable</p>';
      }
      ?><br><br>


      <label for="cMdps">Confirmez votre mot de passe :</label>
      <input type="text" name="cMdps" id="cMdps" class="elem-form" placeholder="********">
      <span id="erreur5" name="erreurCmdps"></span>
      <?php
        if ($_SESSION['erreur6'] == 1) {
          echo '<p id="erreur">Le mot de passe est différent !!!</p>';
      }
      ?><br><br>

      <label for="photo">Votre photo de profil :</label>
      <input type="file" name="photo" id="photo" class="elem-form">
      <span id="erreur6" name="erreurPhoto"></span>
      <?php
        if ($_SESSION['erreur7'] == 1) {
          echo '<p id="erreur">La photo est requise</p>';
      }
      ?>



      <input type="submit" class="button" value="S'enregistrer" id="submit">
      <input id="submit" class="button" type="submit" name="reset" value="Reset" />
    </form>
  </main>
  <!-- DEBUT FOOTER -->
  <?php require_once "../includes/footer.php" ?>
  <!-- <script src="../Javascript/script.js"></script> -->

</body>

</html>