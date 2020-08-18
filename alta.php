 <?php

    require_once "conexion.php";

    //AGREGAR
    if($_POST){
        $nuevaAlta=new conexion('federacion');
        $nuevaAlta->agregar('alta');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Alta Federación</title>
    </head>
    <body style="background-color:#a7f8f7;">
        <form method="POST">
            <h1>Alta Federación</h1>
            <p>Esta página sirve para añadir jugadores a sus equipos</p>

            <label>Nombre Jugador</label>
            <p></p>
            <input type="text" name="nombre_jugador">
            <p></p>
            <label>Apellido Jugador</label>
            <p></p>
            <input type="text" name="apellido_jugador">
            <p></p>
            <label>Dorsal</label>
            <p></p>
            <input type="text" name="dorsal_jugador">
            <p></p>
            <label>Equipo</label>
            <p></p>
            <input type="text" name="equipo_jugador">
            <p></p>
            <select name="categoria_equipo">
                <option value="Primera">Primera</option>
                <option value="Segunda">Segunda</option>
                <option value="Tercera">Tercera</option>
            </select>
            <p></p>
            <button>Añadir</button>
            <button>
                <a href="principal.php">Página principal</a>
            </button>
        </form>
    </body>
</html>