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
                </tr>
            </thead>
            <tbody>
            <?php
                $listaEquipos = $dao->selectAllEquipos();
                if (count($listaEquipos) == 0){
                    echo "<tr><td colspan='2'>No hay equipos</td><tr>";
                }else{
                    foreach ($listaEquipos as $equipos){
                        echo "<tr><td>".$equipos['nombre']."</td><td>".$equipos['estadio']."</td></tr>";
                    }    
                }  
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>