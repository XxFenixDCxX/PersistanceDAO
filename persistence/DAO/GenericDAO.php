<?php
abstract class GenericDAO {

  //Conexión a BD
  protected $conn = null;
  //Constructor de la clase
  public function __construct() {
    $this->conn = PersistentManager::getInstance()->get_connection();
  }

  abstract protected function selectAllEquipos();
  abstract protected function selectAllPartidos();
  abstract protected function selectByIdEquipos($id);
}
