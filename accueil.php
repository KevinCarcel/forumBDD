<?php
require_once "includes/head.php" ?>

<body>
  <!-- DEBUT HEADER -->
  <header class="header1">
    <div class="header-fixe">
      <div class="imageHeader">
        <a href="accueil.html"><img src="image/logo header.png" alt="logoHeader" class="logoHeader"></a>
      </div>
      <nav class="nav-fixe">
        <ul class="liste-header-fixe">
          <li class="li-header-fixe"><a class="link-header" href="accueil.php">ACCUEIL</a></li>
          <li class="li-header-fixe"><a class="link-header" href="views/enregistrer.php">S'ENREGISTRER</a>
          </li>
          <li class="li-header-fixe"><a class="link-header" href="views/connexion.php">CONNEXION</a></li>
        </ul>
      </nav>
      <div class="reso">
        <a href="#"><img src="image/facebook.png" alt="facebook" class="logoReso"></a>
        <a href="#"><img src="image/instagram.png" alt="instagram" class="logoReso"></a>
      </div>
  </header>
  <nav class="navbar navbar-expand-lg bg-body-tertiary header2">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="accueil.php">ACCUEIL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="views/enregistrer.php">S'ENREGISTRER</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="views/connexion.php">CONNEXION</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- DEBUT MAIN -->
  <main class="mainAccueil">
    <div class="topAccueil">
      <h1>ACCUEIL</h1>
      <p class="textTopAccueil">Bienvenue sur Vafc Forum, le site numéro 1 des supporters du VAFC. <br>
        Enregistrez-vous ou connectez-vous et venez débattre sur de nombreux sujets liés au VAFC.</p>
    </div>
    <div class="botAccueil">
      <div class="fullBtn1">
        <p class="textBotAccueil">Cliquez sur le bouton ci-dessous pour vous enregistrer.</p>
        <a href="views/enregistrer.php"><input type="button" value="S'ENREGISTRER" class="btn1"></a>
      </div>
      <div class="fullBtn2">
        <p class="textBotAccueil">Cliquez sur le bouton ci-dessous pour vous connecter.</p>
        <a href="views/connexion.php"><input type="button" value="CONNEXION" class="btn2"></a>
      </div>
    </div>
  </main>
  <!-- DEBUT FOOTER -->
  <footer>
    <div class="fullFooter">
      <div class="imgFooter">
        <a href="accueil.html"><img src="image/logoFooter.png" alt="logoFooter" class="logoFooter"></a>
      </div>
      <nav class="navResp">
        <a href="accueil.php" class="linkNav">ACCUEIL</a>
        <a href="views/enregistrer.php" class="linkNav">S'ENREGISTRER</a>
        <a href="views/connexion.php" class="linkNav">CONNEXION</a>
      </nav>
    </div>
    <div class="copy">&copy; copyright, Kevin Carcel</div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="Javascript/script.js"></script>
</body>

</html>