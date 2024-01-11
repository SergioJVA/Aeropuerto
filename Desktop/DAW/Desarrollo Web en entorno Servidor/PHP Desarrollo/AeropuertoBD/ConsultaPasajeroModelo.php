<?php

/*
    Este ejempllo realiza una consulta a una BBDD utilizando PDO y mostrando los resultados usadno el metodo PDO:FETCH_CLASS
*/

 //EJEMPLO PARA INSERTAR UNA CONSULTA FETCH
 include_once 'Conexion.php';
 include_once '../AeropuertoBD/Modelo/Pasajero.php';
 $conexion = Conexion::obtenerConexion();


 $sqlInsert = "SELECT * FROM pasajero";

 $sentencia = $conexion ->prepare($sqlInsert);

 // Para leer necesito elegir el tipo de dato que queremos como salida
 // Para ello hay varias constantes que determinan los distintos tipos:
 // - PDO::ASOC: Me devuelve un array indexado por los nombres de las columnas
 // - PDO::NUM: Me devuelve un array indexado por el numero de columna
 // - PDO::BOTH: Valor por defecto. Devuelve un array indexado por columnas y por numeros
 $sentencia->setFetchMode(PDO::FETCH_CLASS,"Pasajero");
 $sentencia->execute();
 
 // $Fila ahora es un objeto cuyos atributos son los nombres de los campos en la tabla de la BBDD    
 while($fila = $sentencia->fetch()){
    echo "<br />ID: ".$fila->getIdPasajero();
    echo "<br />Nombre: ".$fila->getNombre();
    echo "<br />Apellidos: ".$fila->getApellidos();
    echo "<br />Edad: ".$fila->getEdad();
    echo "<br />IdVuelo: ".$fila->getIdVuelo();
    echo "<br />";
 }

?>