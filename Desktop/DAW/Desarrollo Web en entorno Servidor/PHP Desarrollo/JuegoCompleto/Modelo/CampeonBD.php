<?php
include_once 'Campeon.php';

    class CampeonBD{

        // Metodo insertar estatico SIEMPRE
        public static function addCampeon(Campeon $campeon):bool{
            $insertado = false;

            // Establecemos conexion con la BBDD
            include_once '../Conexion/Conexion.php';
            $conexion = Conexion::obtenerConexion();

            // Preparar la consulta SQL
            $sqlInsert = "INSERT INTO campeon (Nombre,Rol,Dificultad,Descripcion) VALUES (:Nombre,:Rol,:Dificultad,:Descripcion)";
            $sentencia = $conexion ->prepare($sqlInsert);

            $Nombre = $campeon->getNombre();
            $Rol = $campeon->getRol();
            $Dificultad = $campeon->getDificultad();
            $Descripcion = $campeon->getDescripcion();


            
            $sentencia->bindParam(":Nombre",$Nombre);
            $sentencia->bindParam(":Rol",$Rol);
            $sentencia->bindParam(":Dificultad",$Dificultad);
            $sentencia->bindParam(":Descripcion",$Descripcion);

            $insertado =  $sentencia->execute();

            return $insertado;
        }


        public static function getAll(){
            //Establecemos conexion
            include_once '../Conexion/Conexion.php';
            $conexion = Conexion::obtenerConexion();

            //Preparar la consulta
            $sqlAll = "SELECT * FROM campeon";
            $sentencia = $conexion->prepare($sqlAll);

            $sentencia->setFetchMode(PDO::FETCH_CLASS,"Campeon");
            $sentencia->execute();

            return $sentencia->fetchAll();

        }

    }





?>