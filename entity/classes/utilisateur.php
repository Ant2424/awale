<?php
/******************************************************************************/
// Classe utilisateur
/******************************************************************************/
class utilisateur {

  // Attributs
  /*****************************/
  private $id;
  private $pseudo;

  // Constructeur
  /*****************************/
  function __construct($id=null,$pseudo=null)
  {
     $this->id = $id;
     $this->pseudo = $pseudo;
  }

  // Destructeur
  /*****************************/
  function __destruct()
  {

  }

  // Getter/setter
  /*****************************/
  // Identifiant
  function getId()
  {
    return $this->id;
  }
  function setId($id)
  {
    $this->id=$id;
  }
  // Pseudo
  function getPseudo()
  {
    return $this->pseudo;
  }
  function setPseudo($pseudo)
  {
    $this->pseudo=$pseudo;
  }
}
?>
