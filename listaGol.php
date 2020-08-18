<?php

    require_once"conexion.php";

    $listaGolConexion = new conexion('federacion');
    $resultado = $listaGolConexion->leer('gol');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado Federación</title>
</head>
<body style="background-color:#a7f8f7;">
    <h1>Listado Federación</h1>
    <p>Esta página sirve para listar los goles de los jugadores</p>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Equipo</th>
                <th>Equipo Rival</th>
                <th>Fecha</th>
            </tr>
            <?php foreach($resultado as $dato):?>
            <tr>
                <td><?php echo $dato['nombre_jugador'];?></td>
                <td><?php echo $dato['nombre_equipo'];?></td>
                <td><?php echo $dato['nombre_equipo_rival'];?></td>
                <td><?php echo $dato['fecha_gol'];?></td>
            </tr>
            <?php endforeach ?>
        </table>
        <button>
            <a href="principal.php">Página principal</a>
        </button> 
</body>
</html>