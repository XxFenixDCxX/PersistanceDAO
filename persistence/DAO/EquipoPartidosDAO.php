<?php
require 'GenericDAO.php';

class EquiposPartidosDAO extends GenericDAO {
  const EQUIPOS_TABLE = 'equipos';
  const PARTIDOS_TABLE = 'partidos';
  
  public function selectAllEquipos() {
    $query = "SELECT * FROM " . EquiposPartidosDAO::EQUIPOS_TABLE;
    $result = mysqli_query($this->conn, $query);
    $equipos= array();
    while ($equiposBD = mysqli_fetch_array($result)) {
      $listEquipo = array(
        'id' => $equiposBD["id"],
        'nombre' => $equiposBD["nombre"],
        'estadio' => $equiposBD["estadio"],
      );
      array_push($equipos, $listEquipo);
    }
    return $equipos;
  }
  
  public function selectByIdEquipos($id) {
    $query = "SELECT nombre, estadio FROM " . EquiposPartidosDAO::EQUIPOS_TABLE . " WHERE id=?";
    $stmt = mysqli_prepare($this->conn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $nombre, $estadio);

    while (mysqli_stmt_fetch($stmt)) {
      $user = array(
        'id' => $id,
 				'nombre' => $nombre,
 				'estadio' => $estadio
 		);
       }

    return $user;
  }
  
  public function selectAllPartidos() {
    $query = "SELECT * FROM " . EquiposPartidosDAO::PARTIDOS_TABLE;
    $result = mysqli_query($this->conn, $query);
    $partidos= array();
    while ($partidosBD = mysqli_fetch_array($result)) {
      $listPartidos = array(
        'id' => $partidosBD["id"],
        'equipo1_id' => $partidosBD["equipo1_id"],
        'equipo2_id' => $partidosBD["equipo2_id"],
        'resultado' => $partidosBD["resultado"],
      );
      array_push($partidos, $listPartidos);
    }
    return $partidos;
  }
}

?>
