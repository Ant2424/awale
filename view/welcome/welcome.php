<?php
  // Si l'utilisateur à déjà rempli le formulaire, on créer une variable de session
  if ((isset($_POST['pseudo'])) && strlen($_POST['pseudo']) < 21 )
  {
    $_SESSION['pseudo'] = $_POST['pseudo'];
  }

  // Testons si l'utilisateur a un pseudo
  if (isset($_SESSION['pseudo']))
  {
    if (strlen($_SESSION['pseudo'])<1)
    {
      $_SESSION['pseudo'] ="Anonyme";
    }
    // Redirection vers l'ecran de jeu
    header("Refresh: 0; ./index.php?action=home_page");
  }

  else
  {
    // Envoi du formulaire de pseudo
    require('./form/session.php');
  }
?>
