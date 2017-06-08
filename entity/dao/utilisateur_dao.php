<?php
include_once "./entity/dao/dao.php";
include_once "./entity/classes/utilisateur.php";
/******************************************************************************/
// Class utilisateur_dao
/******************************************************************************/
class utilisateur_dao extends dao {

  function find($pseudo)
  {
    $query  = "SELECT id, pseudo FROM UTILISATEUR WHERE  pseudo = :pseudo;";
    $prepared_query = $this->database->prepare($query);
    $prepared_query->bindParam(':pseudo', $pseudo);

    if (($prepared_query->execute())&&($prepared_query->rowCount()>0))
    {
      $resultat = $prepared_query->fetch(PDO::FETCH_ASSOC);

      $id = $resultat['id'];
      $pseudo = $resultat['pseudo'];

      $utilisateur = new utilisateur($id,$pseudo);
      return $utilisateur;
    }
    else return false;
  }

  function insert(&$object)
  {
    $id = $object->getId();
    $pseudo = $object->getPseudo();

    $query  = "INSERT INTO UTILISATEUR (id, pseudo) VALUES (:id,:pseudo);";

    $prepared_query = $this->database->prepare($query);
    $prepared_query->bindParam(':id', $id);
    $prepared_query->bindParam(':pseudo', $pseudo);

    if ($prepared_query->execute())
    {
      return true;
    }
    else return false;
  }

  function update(&$object)
  {
    $id = $object->getId();
    $pseudo = $object->getPseudo();

    $query  = "UPDATE UTILISATEUR SET id=:id, pseudo=:pseudo WHERE pseudo = :pseudo;";

    $prepared_query = $this->database->prepare($query);
    $prepared_query->bindParam(':id', $id);
    $prepared_query->bindParam(':pseudo', $pseudo);

    if ($prepared_query->execute())
    {
      return true;
    }
    else return false;
  }

  function delete(&$object)
  {
    $pseudo = $object->getPseudo();
    $query  = "DELETE FROM UTILISATEUR WHERE pseudo = :pseudo;";

    $prepared_query = $this->database->prepare($query);
    $prepared_query->bindParam(':pseudo', $pseudo);

    if ($prepared_query->execute())
    {
      $object=null;
      return true;
    }
    else return false;
  }
}

?>
