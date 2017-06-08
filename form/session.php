<!--   BODY   -->
<body>
  <nav class="blue-grey lighten-1">
    <div class="nav-wrapper">

      <a href="index.php?action=welcome" class="brand-logo center"> Accueil </a>

    </div>
  </nav>

  <!-- Formulaire --> 
  <div class="row">
    <form class="col s12" action="index.php?action=welcome" method="post">
      <div class="row">
          <div class="container input-field col s6 offset-s3">
            <i class="material-icons prefix">account_circle</i>
            <input id="pseudo" type="text" name="pseudo" data-length="20">
            <label for="pseudo"> Pseudo </label>
          </div>
      </div>

      <!-- Bouton -->
      <div class="row center">
        <div class="col s12">
          <button class="btn waves-effect waves-light" type="submit" value="Valider"> Se Connecter </button>
        </div>
      </div>
    </form>
  </div>

