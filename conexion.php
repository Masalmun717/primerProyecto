<?php

    class conexion{

        private $pdo;

        function __construct($dbname){
            $link ='mysql:host=localhost;dbname='.$dbname;
            $usuario = 'root';
            $pass = '';

            try{

                $this->pdo = new PDO($link,$usuario,$pass);

            }catch(PDOException $e){
                
                echo '¡¡¡Error!!!:'.$e->getMessage().'<br/>';
                die();
            }
        }

        function agregar($tablaAgregar){
            $nombre_jugador = $_POST['nombre_jugador'];
            $apellido_jugador = $_POST['apellido_jugador'];
            $dorsal_jugador = $_POST['dorsal_jugador'];
            $equipo_jugador = $_POST['equipo_jugador'];
            $categoria_equipo = $_POST['categoria_equipo'];

            $sql_agregar = "INSERT INTO '.$tablaAgregar.' (nombre_jugador,apellido_jugador,dorsal_jugador,equipo_jugador,categoria_equipo) VALUES (?,?,?,?,?)";
            $sentencia_agregar = $this->pdo->prepare($sql_agregar);
            $sentencia_agregar->execute(array($nombre_jugador,$apellido_jugador,$dorsal_jugador,$equipo_jugador,$categoria_equipo));
        }

        function leer($tablaLeer){
            //LEER
            $sql_leer = 'SELECT * FROM '.$tablaLeer;
            $sql_listar = $this->pdo->prepare($sql_leer);
            $sql_listar->execute();

            $resultado = $sql_listar->fetchAll();
            return $resultado;
        }
    }

?>