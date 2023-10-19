<?php

include '../templates/menu.php';
require_once '../persistence/DAO/EquipoPartidosDAO.php';
require_once '../persistence/conf/PersistentManager.php';
$dao= new EquiposPartidosDAO();
?>
    <div class="container">
        <h1>Equipos</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Equipo1</th>
                    <th>Equipo2</th>
                    <th>Resultado</th>
                </tr>
            </thead>
            <tbody>
            <?php
                $listaPartidos = $dao->selectAllPartidos();
                if (count($listaPartidos) == 0){
                    echo "<tr><td colspan='2'>No hay equipos</td><tr>";
                }else{
                    foreach ($listaPartidos as $partido){
                        echo "<tr><td>".$dao->selectByIdEquipos($partido['equipo1_id'])['nombre']."</td><td>".$dao->selectByIdEquipos($partido['equipo2_id'])['nombre']."</td><td>".$partido['resultado']."</td></tr>";
                    }    
                }  
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>