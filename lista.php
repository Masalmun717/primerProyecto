<?php

    require_once "conexion.php";

    $leer=new conexion('federacion');
    $resultado=$leer->leer('alta');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Listado Federación</title>
</head>
<body style="background-color:#a7f8f7;">
    <h1>Listado Federación</h1>
    <p>Esta página sirve para listar jugadores</p>
        <table>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Dorsal</th>
                <th>Equipo</th>
                <th>Categoría</th>
            </tr>
            <?php foreach($resultado as $dato):?>
            <tr>
                <td><?php echo $dato['nombre_jugador'];?></td>
                <td><?php echo $dato['apellido_jugador'];?></td>
                <td><?php echo $dato['dorsal_jugador'];?></td>
                <td><?php echo $dato['equipo_jugador'];?></td>
                <td><?php echo $dato['categoria_equipo'];?></td>
            </tr>
            <?php endforeach ?>
        </table>
        <button>
            <a href="principal.php">Página principal</a>
        </button> 
</body>
</html>