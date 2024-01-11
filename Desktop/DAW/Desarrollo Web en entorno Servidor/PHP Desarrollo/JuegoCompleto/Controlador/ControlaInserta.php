<?php
include_once '../Modelo/CampeonBD.php';


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $Nombre = $_POST["Nombre"];
    $Rol = $_POST["Rol"];
    $Dificultad = $_POST["Dificultad"];
    $Descripcion = $_POST["Descripcion"];


    $nuevoCampeon = new Campeon();
    $nuevoCampeon->setNombre($Nombre);
    $nuevoCampeon->setRol($Rol);
    $nuevoCampeon->setDificultad($Dificultad);
    $nuevoCampeon->setDescripcion($Descripcion);
}

?>