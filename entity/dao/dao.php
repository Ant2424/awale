<?php
include_once "$racine_sf/entity/dao/bdd.php";
/******************************************************************************/
// Abstract class dao
/******************************************************************************/
abstract class dao {

  // Attributes
  /*****************************/
  public $database;

  public function __construct()
  {
    $this->database = bdd::getInstance()->getInstancePDO();
  }

  abstract function find($mail_user);
  abstract function insert(&$objet);
  abstract function update(&$objet);
  abstract function delete(&$objet);

}

?>
